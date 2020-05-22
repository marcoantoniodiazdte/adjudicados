<?php

namespace App\Http\Controllers;
use App\ArchivosProyectos;
use App\AtributosPropiedades;
use App\Facades\Company;
use App\Http\Requests\PropiedadRequestForm;
use App\Municipio;
use App\ProyectoFinanciado;
use App\Provincia;
use App\Inmobiliaria;
use App\Sector;
use App\TiposAtributos;
use App\TiposCaracteristicas;
use App\TiposPropiedades;
use App\Traits\UploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use App\Helpers\CurrencyExchangeHelper;
use Yajra\DataTables\Facades\DataTables;
use Response;

class ProyectoFinanciadoController extends Controller
{
    // protected $guard_name = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin',['except' => ['abrirImagenes','show']]);;
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        // $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }


    public function index(Request $request)
    {
        if($request->ajax()){
            return  DataTables::eloquent(ProyectoFinanciado::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.proyectos_financiados.list');
    }


    public function show($id)
    {
        $propiedad = ProyectoFinanciado::with('inmobiliaria')->find($id);
        $recientes = ProyectoFinanciado::orderBy('id', 'desc')->take(3)->get();
        return view('welcome.proyecto_financiado.view',[
            'propiedad' => $propiedad,
            'recientes' => $recientes
        ]); 
    }


    public function create() {
        return view('crm.proyectos_financiados.create', [
            'provincias' => Provincia::all(),
            'tipos_propiedades' => TiposPropiedades::all(),
            'inmobiliarias' => Inmobiliaria::all()
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
            "precio_rd"         => $precio['peso'],
            "precio_eur"        => $precio['euro'],
            "precio_us"         => $precio['dollar'],
            "precio_oferta_rd"  => $oferta['peso'],
            "precio_oferta_us"  => $oferta['dollar'],
            "precio_oferta_eu"  => $oferta['euro']
        ]);



        $url = "";
        if($request->has('url')) {
            $url = explode('"',$request->mapa_url)[1];
        }
        $request->request->add(['company_id','1']);
        $propiedad = ProyectoFinanciado::create($request->all());

        $propiedad->mapa_url = $url;
        $propiedad->save();

        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('proyectos');
                    $path = $request->file('path')[$key]->store($propiedad->name .'/proyectos');

                    $archivo = ArchivosProyectos::create([
                        'nombre_archivo' => 'archivo',
                        'proyecto_id' => $propiedad->id,
                        'ubicacion' => $path
                    ]);
                }
            }
        }
        return redirect()->action('ProyectoFinanciadoController@index');
    }


    public function update(Request $request, $id)
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
            "precio_rd"         => $precio['peso'],
            "precio_eur"        => $precio['euro'],
            "precio_us"         => $precio['dollar'],
            "precio_oferta_rd"  => $oferta['peso'],
            "precio_oferta_us"  => $oferta['dollar'],
            "precio_oferta_eu"  => $oferta['euro']
        ]);

        $propiedad = ProyectoFinanciado::find($id);

        $url = "";
        if($request->has('url')) {
            $url = explode('"',$request->mapa_url)[1];
        }
        $request->request->add(['company_id','1']);
    
        $propiedad->mapa_url = $url;
        $propiedad->update($request->all());

        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('proyectos');
                    $path = $request->file('path')[$key]->store($propiedad->name .'/proyectos');

                    $archivo = ArchivosProyectos::create([
                        'nombre_archivo' => 'archivo',
                        'proyecto_id' => $propiedad->id,
                        'ubicacion' => $path
                    ]);
                }
            }
        }
        return redirect()->action('ProyectoFinanciadoController@index');
    }

    public function edit($id) {

        $proyecto = ProyectoFinanciado::find($id);

        return view('crm.proyectos_financiados.edit', [
            'provincias' => Provincia::all(),
            'tipos_propiedades' => TiposPropiedades::all(),
            'inmobiliarias' => Inmobiliaria::all(),
            'proyecto' => $proyecto,
            'provincias' => Provincia::all(),
            'municipios' => Municipio::all(),
            'sectores' => Sector::all()
        ]);
    }

    public function setColumnFilter(Request $request) {
        
    }

    public function abrirImagenes($id)
    {
        $imagen = ArchivosProyectos::find($id);
        $file = File::get(Storage::path($imagen->ubicacion));
        $type = File::mimeType(Storage::path($imagen->ubicacion));

        return Response::make($file, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="'.$imagen->ubicacion.'"'
        ]);
    }
}
