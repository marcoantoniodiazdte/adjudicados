<?php

namespace App\Http\Controllers;
use App\Estado;
use App\Inmobiliaria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class EstadoController extends Controller
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
            return  DataTables::eloquent(Estado::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.estados.list');
    }

    public function datatable_id(Request $request, $id)
    {
        if($request->ajax()){
            return  DataTables::eloquent(Estado::query()->where('oportunidad_id', $id))
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

    public function create() {
        return view('crm.estados.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $estado = Estado::create($request->all());
        return redirect()->action('EstadoController@index');
    }

    public function edit($id)
    {
        $estado = Estado::findOrFail($id);
        return view('crm.estados.edit',[
            'estado' => $estado
        ]);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $estado->update($request->all());
        return redirect()->action('EstadoController@index');

    }

    public function delete($id) {
        $estado = Estado::findOrFail($id);
       if ($estado->delete()){
           return response()->json([
               'ok' => true,
           ]);
       }

       return response()->json([
        'ok' => false,
      ]);
    }
}
