<?php

namespace App\Http\Controllers;

use App\Facades\Company;
use App\Http\Requests\TipoAtributoRequest;
use App\TiposAtributos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class TipoAtributoController extends Controller
{

    protected $guard_name = 'admin';
    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->middleware('permission:list.tipos_atributos')->only(['index']);
        $this->middleware('permission:create.tipos_atributos')->only(['create','store']);
        $this->middleware('permission:show.tipos_atributos')->only('show');
        $this->middleware('permission:update.tipos_atributos')->only(['edit','update']);
        $this->middleware('permission:delete.tipos_atributos')->only('delete');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::eloquent(TiposAtributos::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.tipos_atributos');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.tipos_atributos');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }
        return view('crm.propiedades.tipos_atributos.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crm.propiedades.tipos_atributos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoAtributoRequest $request)
    {
        Company::getInfo()->tipos_atributos()->create($request->all());
        return redirect(route('tipos_atributos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TiposAtributos  $tiposAtributos
     * @return \Illuminate\Http\Response
     */
    public function show(TiposAtributos $tiposAtributos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TiposAtributos  $tiposAtributos
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposAtributos $tipos_atributo)
    {
        return view('crm.propiedades.tipos_atributos.edit',compact('tipos_atributo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TiposAtributos  $tiposAtributos
     * @return \Illuminate\Http\Response
     */
    public function update(TipoAtributoRequest $request, TiposAtributos $tipos_atributo)
    {
        $tipos_atributo->update($request->all());
        return redirect(route('tipos_atributos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TiposAtributos  $tiposAtributos
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposAtributos $tiposAtributos)
    {
        //
    }
}
