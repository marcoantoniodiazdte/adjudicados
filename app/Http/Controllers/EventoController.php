<?php

namespace App\Http\Controllers;
use App\Evento;
use App\Admin;
use App\AnalistaCategoria;
use App\EstadoEvento;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmacionOportunidad;
use App\Mail\NuevaOportunidad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Mail\Oportunidadd;
use Illuminate\Http\Request;

class EventoController extends Controller
{
     
    protected $guard_name = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }


    public function index(Request $request)
    {

      
     


        if($request->ajax()){

         

           

            return  
                $query = DataTables::eloquent(Evento::query()->with(['analista', 'oportunidad', 'estado'])
                ->where('eventos.created_at' , '>=', $_GET['start_date']. ' 00:00:00')
                ->where('eventos.created_at' , '<=', $_GET['end_date']. ' 23:59:59' )
                ->whereHas('oportunidad', function($q)
                {
                    if(Auth::user()->role == 'admin') {
                        $categorias = ["propiedad", "proyecto", "vehiculo", "obra", "equipos"];
                    } else {
                       $categorias = AnalistaCategoria::select('categoria_id')->where('analista_id', Auth::user()->id)->get();
                       $categorias =  $categorias->pluck('categoria_id');
                    }
                    $q->whereIn('tipo', $categorias);

                })
                // ->whereIn('eventos.analista_id', $_GET['analista_id'] )
                // ->whereIn('eventos.estado_evento_id', $_GET['estado_evento_id'] )

                )
                
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.eventos.list',[
            'analistas' => Admin::all(),
            'estados' => EstadoEvento::all()
        ]);
    }
    
    public function store(Request $request) {
        $evento = Evento::create($request->all());
        
        return redirect("admin/oportunidades/$evento->oportunidad_id/edit"); 
    }



    public function update(Request $request, $id) {
        // dd($request->all());
        $evento = Evento::create($request->all());
        return response()->json($evento);
    }



    public function delete($id) {
        $evento = Evento::find($id);
        $evento->delete();
        return response()->json($evento);

    }














    public function datatable_id(Request $request, $id)
    {
        if($request->ajax()){
            return  DataTables::eloquent(Evento::query()->with('estado','analista')->where('oportunidad_id', $id))
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

    }
}
