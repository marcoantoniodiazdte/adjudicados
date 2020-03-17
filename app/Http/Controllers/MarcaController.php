<?php

namespace App\Http\Controllers;
use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class MarcaController extends Controller
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
            return  DataTables::eloquent(Marca::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.marcas.list');
    }

    public function create() {
        return view('crm.marcas.create');
    }

    public function store(Request $request) {
        $marca = Marca::insert([
            'nombre' => $request->nombre
        ]);
        return redirect()->action('MarcaController@index');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('crm.marcas.edit',[
            'marca' => $marca
        ]);
    }

    public function update(Request $request, $id)
    {
        $marca = Marca::findOrFail($id);
        $marca->update($request->all());
        return redirect()->action('MarcaController@index');

    }
}
