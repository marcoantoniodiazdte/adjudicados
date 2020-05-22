<?php

namespace App\Http\Controllers;
use App\Company;
use App\Sector;
use App\TiposPropiedades;
use App\TipoObra;
use App\TipoEquipo;
use App\Inmobiliaria;
use App\Provincia;
use App\Obra;
use App\Admin;
use App\Municipio;
use App\Zona;
use App\Equipo;
use App\Marca;
use App\Tema;
use App\Propiedades;
use App\ProyectoFinanciado;
use App\Vehiculo;
use App\Favorite;
use Illuminate\Http\Request;
use App\Mail\Contacto;
use App\Mail\ConfirmacionContacto;
use Illuminate\Support\Facades\Mail;
use Fadion\Fixerio\Exchange;
use Fadion\Fixerio\Currency;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->currency = (isset($_GET['currency'])?$_GET['currency']:'');
    }
    public function index()
    {
        $provincias      = Provincia::select('provincia_id','provincia')->orderBy('provincia','asc')->get();
        // dd($provincias);
        $tipoPropiedades = TiposPropiedades::select('id', 'name')->get();
        $inmobiliarias   = Inmobiliaria::select('id', 'nombre')->get();
        $zonas           = Zona::all();
        $tipoObras       = TipoObra::all();
        $tipoEquipos     = TipoEquipo::all();
        $marcas          = Marca::all();
        $propiedades     = Propiedades::all()->where('vendido','0');

        return view('welcome.index', [
            'provincias' => $provincias,
            'tipo_propiedades' => $tipoPropiedades,
            'inmobiliarias'    => $inmobiliarias,
            'propiedades'      => $propiedades,
            'zonas'            => $zonas,
            'tipoObras'        => $tipoObras,
            'tipoEquipos'       => $tipoEquipos,
            'marcas'           => $marcas
        ]);
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $recientes = Propiedades::where('vendido','0')->orderBy('id', 'desc')->take(3)->get();
        $propiedades     = Propiedades::select('id','name','estado','precio_rd','precio_us', 'precio_eur', 'precio_oferta_rd', 'precio_oferta_usd', 'precio_oferta_eu','slug', 'precio_oferta_rd','codigo_referencia','habitaciones','area','banos','tipo_oferta','direccion','estado_comercial','codigo_referencia', 'monto', 'monto_oferta', 'moneda')->where('vendido','0');

        // if($request->has('zona_id')){ $propiedades->whereIn('zona_id', $request->zona_id);}
        if($request->has('estado_comercial')){ $propiedades->whereIn('estado_comercial', $request->estado_comercial);}
        if($request->has('provincia_id')){$propiedades->whereIn('provincia_id',$request->provincia_id);}
        if($request->has('municipio_id')){$propiedades->whereIn('municipio_id',$request->municipio_id);}
        if($request->has('sector_id')){$propiedades->whereIn('sector_id',$request->sector_id);}
        if($request->has('habitaciones')){$propiedades->whereIn('habitaciones',$request->habitaciones);}
        if($request->has('banos')){$propiedades->whereIn('banos',$request->banos);}
        if($request->has('tipo_id')){$propiedades->whereIn('tipo_id',$request->tipo_id);}
        if($request->has('oferta')){$propiedades->where('tipo_oferta','exclusiva');}
        if($request->has('my_range')){
            $value = explode(';',$request->my_range);
            $propiedades->where('precio_oferta_rd', '>=', $value[0]);
            $propiedades->where('precio_oferta_rd', '<=', $value[1]);
        }
        if($request->has('sort')){$propiedades->orderBy('id',$request->sort);}
        else{$propiedades->orderBy('id','desc');}


        // dd($propiedades->get());
        return view('welcome.search',[
            'propiedades' => $propiedades->get(),
            'recientes'   => $recientes 
        ]);
    }


    public function searchProyectos(Request $request)
    {
        // dd($request->all());
        $recientes = ProyectoFinanciado::where('vendido','0')->orderBy('id', 'desc')->take(3)->get();
        $propiedades     = ProyectoFinanciado::with('inmobiliaria')->select('id','name','estado','precio_rd','precio_us', 'precio_eur', 'precio_oferta_rd', 'precio_oferta_us', 'precio_oferta_eu', 'precio_oferta_rd','codigo_referencia','habitaciones','area','tipo_oferta','direccion','codigo_referencia','inmobiliaria_id', 'monto', 'monto_oferta', 'moneda')->where('vendido','0');

        // if($request->has('zona_id')){ $propiedades->whereIn('zona_id', $request->zona_id);}
        if($request->has('estado_comercial')){ $propiedades->whereIn('estado_comercial', $request->estado_comercial);}
        if($request->has('provincia_id')){$propiedades->whereIn('provincia_id',$request->provincia_id);}
        if($request->has('municipio_id')){$propiedades->whereIn('municipio_id',$request->municipio_id);}
        if($request->has('sector_id')){$propiedades->whereIn('sector_id',$request->sector_id);}
        if($request->has('inmobiliaria_id')){$propiedades->whereIn('inmobiliaria_id',$request->inmobiliaria_id);}
        if($request->has('habitaciones')){$propiedades->whereIn('habitaciones',$request->habitaciones);}
        if($request->has('banos')){$propiedades->whereIn('banos',$request->banos);}
        if($request->has('tipo_id')){$propiedades->whereIn('tipo_id',$request->tipo_id);}
        if($request->has('oferta')){$propiedades->where('tipo_oferta','exclusiva');}
        if($request->has('my_range')){
            $value = explode(';',$request->my_range);
            $propiedades->where('precio_oferta_rd', '>=', $value[0]);
            $propiedades->where('precio_oferta_rd', '<=', $value[1]);
        }
        if($request->has('sort')){$propiedades->orderBy('id',$request->sort);}
        else{$propiedades->orderBy('id','desc');}


        // dd($propiedades->get());
        return view('welcome.proyectos',[
            'propiedades' => $propiedades->get(),
            'recientes'   => $recientes 
        ]);
    }

    public function searchVehiculos(Request $request)
    {
        // dd($request->all());
        $recientes = Vehiculo::where('vendido','0')->orderBy('id', 'desc')->take(3)->get();
        $vehiculos = Vehiculo::with(["favorite", "offer", "offer.estado"])->select( 'descripcion','marca_id','fecha_fabricacion','precio','precio_oferta','precio_usd','precio_eu','precio_oferta_usd','precio_oferta_eu','titulo','precio_oferta','tipo_oferta','id','codigo_referencia', 'monto', 'monto_oferta', 'moneda')->where('vendido','0');
        if($request->has('marca_id')){ $vehiculos->whereIn('marca_id', $request->marca_id);}
        if($request->has('fecha_fabricacion')){ $vehiculos->where('fecha_fabricacion', $request->fecha_fabricacion);}
        if($request->has('oferta')){$propiedades->where('tipo_oferta','exclusiva');}
        if($request->has('my_range')){
            $value = explode(';',$request->my_range);
            $vehiculos->where('precio_oferta', '>=', $value[0]);
            $vehiculos->where('precio_oferta', '<=', $value[1]);
        }
        if($request->has('sort')){$vehiculos->orderBy('id',$request->sort);}
        else{$vehiculos->orderBy('id','desc');}
        // $vehiculos = Vehiculo::all();
        return view('welcome.vehiculos',[
            'vehiculos' => $vehiculos->get(),
            'recientes' => $recientes
        ]);
    }

    public function searchObras(Request $request)
    {
        // dd($request->all());
        $recientes = Obra::where('vendido','0')->orderBy('id', 'desc')->take(3)->get();
        $obras = Obra::select( 'tipo_id', 'precio','precio_usd','precio_eu', 'descripcion','titulo','precio_oferta','precio_oferta_usd','precio_oferta_eu','tipo_oferta', 'id', 'codigo_referencia', 'monto', 'monto_oferta', 'moneda')->where('vendido','0');
        if($request->has('tipo_id')){ $obras->whereIn('tipo_id', $request->tipo_id);}
        if($request->has('oferta')){$obras->where('tipo_oferta','exclusiva');}
        if($request->has('my_range')){
            $value = explode(';',$request->my_range);
            $obras->where('precio_oferta', '>=', $value[0]);
            $obras->where('precio_oferta', '<=', $value[1]);
        }
        if($request->has('sort')){$obras->orderBy('id',$request->sort);}
        else{$obras->orderBy('id','desc');}

        return view('welcome.obras',[
            'obras' => $obras->get(),
            'recientes' => $recientes
        ]);
    }

    public function searchEquipos(Request $request)
    {
        // dd($request->all());
        $recientes = Equipo::where('vendido','0')->orderBy('id', 'desc')->take(3)->get();
        $equipo = Equipo::select('tipo_id', 'precio','precio_usd','precio_eu', 'descripcion','titulo','precio_oferta','precio_oferta_usd','precio_oferta_eu','tipo_oferta','id', 'codigo_referencia', 'monto', 'monto_oferta', 'moneda')->where('vendido','0');
        if($request->has('tipo_id')){ $equipo->whereIn('tipo_id', $request->tipo_id);}
        if($request->has('oferta')){$equipo->where('tipo_oferta','exclusiva');}
        if($request->has('my_range')){
            $value = explode(';',$request->my_range);
            $equipo->where('precio_oferta', '>=', $value[0]);
            $equipo->where('precio_oferta', '<=', $value[1]);
        }
        if($request->has('sort')){$equipo->orderBy('id',$request->sort);}
        else{$equipo->orderBy('id','desc');}

        return view('welcome.equipos',[
            'equipos' => $equipo->get(),
            'recientes' => $recientes
        ]);
    }
    
    public function minicipalities(Request $request)
    {
        $provincias = Provincia::whereIn('provincia_id',$request->data)->get();
        $municipalities =  [];
        foreach ($provincias as $key => $value) {
            $municipalities[$key] = $value->municipios;
        }
        return $municipalities;
    }


    public function provincia(Request $request)
    {
        $provincias = Provincia::whereIn('zona_id',$request->data)->get();
        return $provincias;
    }


    public function sector(Request $request)
    {
        // $municipio = Municipio::where('municipio_id', $id)->first();
        // return $municipio->sectores;
        // $secores   = $municipio->sectores;
        $municipios = Municipio::whereIn('municipio_id',$request->data)->get();
        $sectors = [];
        foreach($municipios as $key => $value)
        {
            $sectors[$key] = $value->sectores;
        }
        return $sectors;

    }

    public function exchangeEur()
    {
        // $exchange = new Exchange();
      
        $endpoint = date('Y-m-d');
        $access_key = '3b25ad18dd16d35242a75b4f7f528e7c';
        $from = 'EUR';
        $to = 'USD';
        // initialize CURL:
        $ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'&base='.$from);   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // get the JSON data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $conversionResult = json_decode($json, true);

        // access the conversion result
    }
    
    public function exchangeUsd()
    {
        $endpoint = 'list';
        $access_key = 'ceafcc60472c97f4572b7c0109c5230b';

        // Initialize CURL:
        $ch = curl_init('https://apilayer.net/api/'.$endpoint.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $exchangeRates = json_decode($json, true);

        // Access the exchange rate values, e.g. GBP:
        dd($exchangeRates);
    }
  
    public function contact(Request $request) {
        // dd($request->all());
        // dd($email);
        if ( Company::info()->crm ) {
            $users = Admin::where('notificacion_visita', 1)->get();
            $to = $users->pluck('email');

        } else {
            $to = Company::info()->from;
        }

        $email =  Company::info()->from;
        $nombre = Company::info()->nombre;
        $request->request->add(['notificacion' => $email]);
        $request->request->add(['nombre' => $nombre ]);
        Mail::send(new Contacto($request->all(),$to,$nombre));
        Mail::send(new ConfirmacionContacto($request->all(),$email,$nombre));
        return back();
    }

    public function login()
    {
        return view('welcome.login');
    }


    
    function company_access() {

        $code = Company::find(1)->codigo;


        $ch     = curl_init();
		$fields = http_build_query(['codigo' => $code]);
		curl_setopt($ch, CURLOPT_URL, 'http://roommeeting.dtehost.com/api/adjudicados/company');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Accept: application/json',
		    'authorization:sdf541gs6df51gsd1bsb16etb16teg1etr1ge61g' 
	    ));
	    curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
		$output = curl_exec($ch);
		curl_close($ch);
		// $json = json_decode($output);
		// if($json){
		// 	return $json;
        // }
		echo $output;

    }
}
