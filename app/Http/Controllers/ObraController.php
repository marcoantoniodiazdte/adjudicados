<?php

namespace App\Http\Controllers;
use App\Obra;
use App\TipoObra;
use App\ArchivosObra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\CurrencyExchangeHelper;
use Response;

class ObraController extends Controller
{
    protected $guard_name = 'admin';

    public function __construct()
    {
        // $this->middleware('auth:admin');
        $this->middleware('auth:admin',['except' => ['abrirImagenes','show']]);
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        // $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            return  DataTables::eloquent(Obra::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.obras.list');
    }

    public function create()
    {
        $tipos = TipoObra::all();
        return view('crm.obras.create', [
            'tipos' => $tipos
        ]);
    }

    public function edit(Obra $obra)
    {
        $tipos = TipoObra::all();
        return view('crm.obras.edit', [
            'tipos' => $tipos,
            'obra'  => $obra
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
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

        $obra = Obra::create($request->all());

        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('obras');
                    $path = $request->file('path')[$key]->store($obra->titulo .'/obras');

                    $archivo = ArchivosObra::create([
                        'nombre_archivo' => 'archivo',
                        'obra_id' => $obra->id,
                        'ubicacion' => $path,
                    ]);
                }
            }
        }
        return redirect()->action('ObraController@index');
    }

    public function show($id)
    {
        $obra = Obra::findOrFail($id);
        $recientes = Obra::orderBy('id', 'desc')->take(3)->get();
        return view('crm.obras.view',[
            'obra' => $obra,
            'recientes' => $recientes
        ]);
    }

    public function update(Request $request,Obra $obra)
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
        
        $obra->update($request->all());
        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('obras');
                    $path = $request->file('path')[$key]->store($obra->name .'/obras');

                    $archivo = ArchivosObra::create([
                        'nombre_archivo' => 'archivo',
                        'obra_id' => $obra->id,
                        'ubicacion' => $path,
                    ]);
                }
            }
        }
        return redirect()->action('ObraController@index');
    }

    public function abrirImagenes($id)
    {
        $imagen = ArchivosObra::find($id);
        $file = File::get(Storage::path($imagen->ubicacion));
        $type = File::mimeType(Storage::path($imagen->ubicacion));

        return Response::make($file, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="'.$imagen->ubicacion.'"'
        ]);
    }
}
