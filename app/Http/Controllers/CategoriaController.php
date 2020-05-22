<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Inmobiliaria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class CategoriaController extends Controller
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
            return  DataTables::eloquent(Categoria::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.categorias.list');
    }

    public function create() {
        return view('crm.categorias.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $categoria = Categoria::create($request->all());
        return redirect()->action('CategoriaController@index');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('crm.categorias.edit',[
            'categoria' => $categoria
        ]);
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return redirect()->action('CategoriaController@index');

    }
}
