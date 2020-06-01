<?php

namespace App\Http\Controllers;
use App\Oportunidad;
use App\Admin;
use App\Estado;
use App\User;
use App\Categoria;
use App\EstadoEvento;
use App\Propiedades;
use App\Vehiculo;
use App\Obra;
use App\ProyectoFinanciado;
use App\Equipo;
use App\Http\Controllers\Artisan;
use App\AnalistaCategoria;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmacionOportunidadUsuario;
use App\Mail\ConfirmacionContraOfertaUsuario;
use App\Mail\ConfirmacionCancelarOfertaUsuario;
use App\Mail\NuevaOportunidadAnalista;
use App\Mail\NuevaContraOfertaAnalista;
use App\Mail\EstadoOportunidad;
use App\Mail\CancelarOfertaAnalista;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Mail\Oportunidadd;
use Illuminate\Http\Request;

class OportunidadController extends Controller
{
    
        
    protected $guard_name = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin',['except' => ['like','dislike', 'ofertar', 'contraOferta', 'cancelarOferta']]);
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }

    public function index(Request $request)
    {

        // $grab = file_get_contents("http://www.precio-dolar.com.do/");
        // $first = explode( '<td class="pocket-row-right">' , $grab );
        // $second = explode("</td>" , $first[1] );

        // $values = explode( " ", $second[0]);
        // $dolar = (float) str_replace(",",".",$values[0]);


        // $grab = file_get_contents("https://www.precio-dolar.com.do/EUR_DOP");
        // $first = explode( '<td class="pocket-row-right">' , $grab );
        // $second = explode("</td>" , $first[1] );

        // $values = explode( " ", $second[0]);
        // $euro = (float) str_replace(",",".",$values[0]);


        if(Auth::user()->role == 'admin') {
            $categorias = ["propiedad", "proyecto", "vehiculo", "obra", "equipos"];
        } else {
           $categorias = AnalistaCategoria::select('categoria_id')->where('analista_id', Auth::user()->id)->get();
           $categorias =  $categorias->pluck('categoria_id');
        }


        if($request->ajax()){
            return  DataTables::eloquent(Oportunidad::query()->select('oportunidades.*', 'vista_anuncios.moneda as moneda', 'vista_anuncios.nombre as titulo')->with(['estado'])->where('oportunidades.favorito',0)->whereIn('oportunidades.tipo',$categorias) ->where('oportunidades.fecha' , '>=', $_GET['start_date']. ' 00:00:00')
            ->where('oportunidades.fecha' , '>=', $_GET['start_date']. ' 00:00:00')
            ->where('oportunidades.fecha' , '<=', $_GET['end_date']. ' 23:59:59' )
            ->whereHas('estado', function($q)
            {
               
                $q->whereIn('id', $_GET['estado_id']);

            })
            ->join('vista_anuncios', function($q){
                $q->on('vista_anuncios.id_aux', '=', 'oportunidades.anuncio_id');
                $q->on('vista_anuncios.tipo', '=', 'oportunidades.tipo');
            })
            )
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                // ->addColumn('anuncio', function($row) {
                //     if($row->tipo == 'propiedad') {
                //          return  Propiedades::find($row->anuncio_id)->toArray();
                //     }
            
                //     if($row->tipo == 'proyecto') {
                //         return ProyectoFinanciado::find($row->anuncio_id)->toArray();
                //     }
            
                //     if($row->tipo == 'vehiculo') {
                //         return Vehiculo::find($row->anuncio_id)->toArray();
                //     }
            
                //     if($row->tipo == 'obra') {
                //         return Obra::find($row->anuncio_id)->toArray();
                //     }
            
                //     if($row->tipo == 'equipos') {
                //         return Equipo::find($row->anuncio_id)->toArray();
                //     }
                // })
                ->rawColumns(['edit','view','titulo'])
                ->make(true);
        }

        return view('crm.oportunidades.list', [
            'estados' => Estado::all()
        ]);
    }

    

    public function show($id) {
        $oportunidad = Oportunidad::with(['estado','cliente'])->find($id);

        $anuncio = [];


        if($oportunidad->tipo == 'propiedad') {
            $anuncio = Propiedades::find($oportunidad->anuncio_id);
            $url = "/propiedad/$anuncio->id";
        }

        if($oportunidad->tipo == 'proyecto') {
            $anuncio = ProyectoFinanciado::find($oportunidad->anuncio_id);
            $url = "/proyecto/$anuncio->id";
        }

        if($oportunidad->tipo == 'vehiculo') {
            $anuncio = Vehiculo::find($oportunidad->anuncio_id);
            $url = "/vehiculo/$anuncio->id";
        }

        if($oportunidad->tipo == 'obra') {
            $anuncio = Obra::find($oportunidad->anuncio_id);
            $url = "/obra/$anuncio->id";

        }

        if($oportunidad->tipo == 'equipos') {
            $anuncio = Equipo::find($oportunidad->anuncio_id);
            $url = "/equipos/$anuncio->id";

        }
        

        return view('crm.oportunidades.show', [
            'oportunidad' => $oportunidad,
            'estados' => Estado::all(),
            'anuncio' => $anuncio,
            'url' => $url
        ]);
    }

    public function edit($id) {

        $oportunidad = Oportunidad::with(['estado','cliente'])->find($id);

        $anuncio = [];


        if($oportunidad->tipo == 'propiedad') {
            $anuncio = Propiedades::find($oportunidad->anuncio_id);
            $url = "/propiedad/$anuncio->id";
        }

        if($oportunidad->tipo == 'proyecto') {
            $anuncio = ProyectoFinanciado::find($oportunidad->anuncio_id);
            $url = "/proyecto/$anuncio->id";
        }

        if($oportunidad->tipo == 'vehiculo') {
            $anuncio = Vehiculo::find($oportunidad->anuncio_id);
            $url = "/vehiculo/$anuncio->id";
        }

        if($oportunidad->tipo == 'obra') {
            $anuncio = Obra::find($oportunidad->anuncio_id);
            $url = "/obra/$anuncio->id";

        }

        if($oportunidad->tipo == 'equipos') {
            $anuncio = Equipo::find($oportunidad->anuncio_id);
            $url = "/equipos/$anuncio->id";

        }

        return view('crm.oportunidades.edit', [
            'oportunidad' => $oportunidad,
            'estados' => Estado::all(),
            'estados_eventos' => EstadoEvento::all(),
            'anuncio' => $anuncio,
            'url' => $url
        ]);

    }

    public function update(Request $request, $id)
    {
        $oportunidad = Oportunidad::find($id);
        $estado = $oportunidad->estado_id;

        $resp = $oportunidad->update($request->all());

        if ( $resp && $estado != $oportunidad->estado ) {
            $status = Estado::find($oportunidad->estado_id);
            $user = User::find($oportunidad->usuario_id);
            Mail::send(new EstadoOportunidad($user,$status));
        }
        return redirect()->action('OportunidadController@index');
    }

    public function like(Request $request) {
        $like = Oportunidad::create([
            'usuario_id' => \Auth::user()->id,
            'anuncio_id' => $request->anuncio_id,
            'tipo' => $request->tipo,
            'favorito' => 1,
            'estado_id' => 1,
            'fecha' => date('Y-m-d H:i:s')
        ]);
    }

    public function dislike(Request $request) {
        $dislike = Oportunidad::where([
            'usuario_id' => \Auth::user()->id,
            'anuncio_id' => $request->anuncio_id,
            'favorito' => 1,
            'estado' => 1,
            'tipo' => $request->tipo
        ])->first();

        $dislike->delete();
    }

    public function ofertar(Request $request) {

       

        $offer = new Oportunidad();
        $offer->usuario_id = \Auth::user()->id;
        $offer->anuncio_id = $request->anuncio_id;
        $offer->tipo = $request->tipo;
        $offer->favorito = 0;
        $offer->monto = $request->monto;
        // Codigo Estado del Sistema Enviado (1)
        $offer->estado_id = 1;
        $offer->fecha = date('Y-m-d H:i:s');
        $offer->save();
        $requisitos = Categoria::find($offer->tipo)->requisitos;


        $tipo = AnalistaCategoria::where('categoria_id', $request->tipo)->get();
        $users = Admin::whereIn('id',$tipo->pluck('analista_id'))->get();
        $emails = $users->pluck('email');

        Mail::send(new ConfirmacionOportunidadUsuario($request->all(),\Auth::user()->email, \Auth::user()->nombre, $requisitos));
        Mail::send(new NuevaOportunidadAnalista($offer, $emails, \Auth::user()->nombre));
    }



    public function contraOferta(Request $request) {
       $offer = Oportunidad::find($request->id);
       $offer->monto = $request->monto;
       // Codigo Estado del Sistema Enviado (1)
       $offer->estado_id = 1;
       $offer->save();

       $tipo = AnalistaCategoria::where('categoria_id', $offer->tipo)->get();
       $users = Admin::whereIn('id',$tipo->pluck('analista_id'))->get();
       $emails = $users->pluck('email');


        Mail::send(new ConfirmacionContraOfertaUsuario($request->all(),\Auth::user()->email, \Auth::user()->nombre));
        Mail::send(new NuevaContraOfertaAnalista($offer,$emails, \Auth::user()->nombre));

    }

    public function pivot() {
        // $data = Oportunidad::where('favorito',0)->get();
        
        $sql = "SELECT
        oportunidades.id AS ID_Oportunidad, 
        vista_anuncios.nombre AS Nombre,
        vista_anuncios.referencia AS Referencia,
        oportunidades.monto AS Monto_Ofertado, 
        FORMAT(vista_anuncios.monto,2) as Monto_Original,
        vista_anuncios.moneda as Moneda,
        DATE_FORMAT(DATE(oportunidades.fecha), '%d/%m/%Y') AS Fecha, 
        MONTH(oportunidades.fecha) AS Mes, 
        YEAR(oportunidades.fecha) AS Año, 
        estados.nombre AS Estado, 
        UCASE(oportunidades.tipo) AS Categoria, 
        users.name AS Cliente 
        
        FROM oportunidades, vista_anuncios, estados, users
        
        WHERE oportunidades.estado_id = estados.id AND
         oportunidades.usuario_id = users.id AND
         oportunidades.anuncio_id = vista_anuncios.id_aux  AND 
         oportunidades.tipo = vista_anuncios.tipo AND
         oportunidades.fecha >= '{$_GET['start_date']} 00:00:00' AND 
         oportunidades.fecha <= '{$_GET['end_date']} 23:59:59'";

        $data = DB::select($sql);

        // $data = DB::table('oportunidades')->select('oportunidades.id as ID_Oportunidad', 'oportunidades.monto as Monto_Ofertado', DB::raw('DATE_FORMAT(DATE(oportunidades.fecha), "%d/%m/%Y") as Fecha')
        // , DB::raw('MONTH(oportunidades.fecha) as Mes')
        // , DB::raw('YEAR(oportunidades.fecha) as Año')
        // , 'estados.nombre as Estado', DB::raw('UCASE(oportunidades.tipo) as Categoria'), 'users.name as Cliente')

        // ->where('oportunidades.fecha' , '>=', $_GET['start_date']. ' 00:00:00')
        // ->where('oportunidades.fecha' , '<=', $_GET['end_date']. ' 23:59:59' )
        // // ->join('vista_anuncios', 'vista_anuncios.id_aux', '=', 'oportunidades.anuncio_id and vista_anuncios.tipo = oportunidades.tipo') 
        // ->join('estados', 'oportunidades.estado_id', '=', 'estados.id')
        // ->join('users',  'oportunidades.usuario_id', '=', 'users.id')->get();



        return response()->json([
            'data' => $data
        ]);
    }


    public function cancelarOferta(Request $request) {
        $offer = Oportunidad::find($request->id);
        // Codigo Estado del Sistema Cancelada (3)
        $offer->estado_id = 3;
        $offer->save();

        $tipo = AnalistaCategoria::where('categoria_id', $offer->tipo)->get();
        $users = Admin::whereIn('id',$tipo->pluck('analista_id'))->get();
        $emails = $users->pluck('email');


        Mail::send(new ConfirmacionCancelarOfertaUsuario($request->all(),\Auth::user()->email, \Auth::user()->nombre));
        Mail::send(new CancelarOfertaAnalista($offer, $emails, \Auth::user()->nombre));

       
    }
}
