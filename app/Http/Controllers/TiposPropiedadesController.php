<?php

namespace App\Http\Controllers;

use App\TiposPropiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class TiposPropiedadesController extends Controller
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
            return  DataTables::eloquent(TiposPropiedades::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.tipo_propiedades.list');
    }


    public function create()
    {
        return view('crm.tipo_propiedades.create');
    }

 
    public function store(Request $request)
    {
        $tipo = TiposPropiedades::create($request->all());
        return redirect()->action('TiposPropiedadesController@index');
    }


    public function show(TiposPropiedades $tiposPropiedades)
    {
        // return view('crm.tipo_propiedades.edit');
    }


    public function edit($tipoPropiedad)
    {
        $tipo = TiposPropiedades::findOrFail($tipoPropiedad);

        return view('crm.tipo_propiedades.edit',[
            'propiedad' => $tipo
        ]);
    }


    public function update(Request $request, TiposPropiedades $tiposPropiedades)
    {
        $tiposPropiedades->update($request->all());
        return redirect()->action('TiposPropiedadesController@index');

    }

    public function destroy(TiposPropiedades $tiposPropiedades)
    {
        //
    }
}
