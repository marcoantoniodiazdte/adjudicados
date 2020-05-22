<?php

namespace App\Http\Controllers;
use App\Requisito;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class RequisitoController extends Controller
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
            return  DataTables::eloquent(Requisito::query()->with('categoria'))
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.requisitos.list');
    }

    public function create() {
        return view('crm.requisitos.create', [
            'categorias' => Categoria::all()
        ]);
    }

    public function store(Request $request) {
        $requisito = Requisito::create($request->all());
        return redirect()->action('RequisitoController@index');
    }

    public function edit($id)
    {
        $requisito = Requisito::findOrFail($id);
        $categorias = Categoria::all();
        // dd($categorias);
        return view('crm.requisitos.edit',[
            'requisito' => $requisito, 
            'categorias' => $categorias
        ]);
    }

    public function update(Request $request, $id)
    {
        $requisito = Requisito::findOrFail($id);
        $requisito->update($request->all());
        return redirect()->action('RequisitoController@index');

    }

}
