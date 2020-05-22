<?php

namespace App\Http\Controllers;
use App\Vehiculo;
use App\Marca;
use App\ArchivosVehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\CurrencyExchangeHelper;
use Response;

class VehiculoController extends Controller
{
    protected $guard_name = 'admin';

    public function __construct()
    {
        // $this->middleware('auth:admin');
        $this->middleware('auth:admin',['except' => ['abrirImagenes','show']]);;
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        // $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('destroy');
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            return  DataTables::eloquent(Vehiculo::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.vehiculos.list');
    }

    public function create(Request $request)
    {
        


        $marcas = Marca::all();
        return view('crm.vehiculos.create',[
            'marcas' => $marcas
        ]);
    }

    public function store(Request $request)
    {

        switch ($request->moneda)
        {
            case 'RD':
                $precio  = CurrencyExchangeHelper::convertPeso($request->monto);
                $oferta  = CurrencyExchangeHelper::convertPeso($request->monto_oferta);
                break;
            case 'USD':
                $precio  = CurrencyExchangeHelper::convertDollar($request->monto);
                $oferta  = CurrencyExchangeHelper::convertDollar($request->monto_oferta);
                break;
            case 'EUR':
                $precio  = CurrencyExchangeHelper::convertDollar($request->monto);
                $oferta  = CurrencyExchangeHelper::convertDollar($request->monto_oferta);
                break;
        }

        $request->merge([
            "precio"            => $precio['peso'],
            "precio_eu"         => $precio['euro'],
            "precio_usd"        => $precio['dollar'],
            "precio_oferta"     => $oferta['peso'],
            "precio_oferta_usd" => $oferta['dollar'],
            "precio_oferta_eu"  => $oferta['euro']
        ]);

        
        $vehiculo = Vehiculo::create($request->all());




        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('vehiculos');
                    $path = $request->file('path')[$key]->store($vehiculo->name .'/vehiculos');

                    $archivo = ArchivosVehiculo::create([
                        'nombre_archivo' => 'archivo',
                        'vehiculo_id' => $vehiculo->id,
                        'ubicacion' => $path,
                    ]);
                }
            }
        }
        return redirect()->action('VehiculoController@index');
    }

    public function show($id)
    {
        $offer = [];
        $vehiculo = Vehiculo::find($id);
        if($vehiculo->offer)
        {
            $offer = $vehiculo->offer;
        }
        $recientes = Vehiculo::orderBy('id', 'desc')->take(3)->get();
        return view('crm.vehiculos.view',[
            'vehiculo'  => $vehiculo,
            'recientes' => $recientes,
            'offer' => $offer
        ]);
    }

    public function edit(Vehiculo $vehiculo)
    {
        $marcas = Marca::all();
        return view('crm.vehiculos.edit',[
            'marcas'   => $marcas,
            'vehiculo' => $vehiculo
        ]);
    }

    public function abrirImagenes($id)
    {
        $imagen = ArchivosVehiculo::find($id);
        $file = File::get(Storage::path($imagen->ubicacion));
        $type = File::mimeType(Storage::path($imagen->ubicacion));

        return Response::make($file, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="'.$imagen->ubicacion.'"'
        ]);
    }

    public function update(Request $request,Vehiculo $vehiculo)
    {

        switch ($request->moneda)
        {
            case 'RD':
                $precio  = CurrencyExchangeHelper::convertPeso($request->monto);
                $oferta  = CurrencyExchangeHelper::convertPeso($request->monto_oferta);
                break;
            case 'USD':
                $precio  = CurrencyExchangeHelper::convertDollar($request->monto);
                $oferta  = CurrencyExchangeHelper::convertDollar($request->monto_oferta);
                break;
            case 'EUR':
                $precio  = CurrencyExchangeHelper::convertDollar($request->monto);
                $oferta  = CurrencyExchangeHelper::convertDollar($request->monto_oferta);
                break;
        }

        $request->merge([
            "precio"            => $precio['peso'],
            "precio_eu"         => $precio['euro'],
            "precio_usd"        => $precio['dollar'],
            "precio_oferta"     => $oferta['peso'],
            "precio_oferta_usd" => $oferta['dollar'],
            "precio_oferta_eu"  => $oferta['euro']
        ]);

        
        $vehiculo->update($request->all());
        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('vehiculos');
                    $path = $request->file('path')[$key]->store($vehiculo->name .'/vehiculos');

                    $archivo = ArchivosVehiculo::create([
                        'nombre_archivo' => 'archivo',
                        'vehiculo_id' => $vehiculo->id,
                        'ubicacion' => $path,
                    ]);
                }
            }
        }
        return redirect()->action('VehiculoController@index');
    }

    public function destroy($id)
    {
        $vehiculo =  Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect()->action('VehiculoController@index');
    }

    public function eliminarImagen(ArchivosVehiculo  $archivo)
    {
        $archivo->delete();
        return $archivo;
    }
}
