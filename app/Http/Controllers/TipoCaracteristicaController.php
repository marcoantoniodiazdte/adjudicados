<?php

namespace App\Http\Controllers;

use App\Facades\Company;
use App\Http\Requests\TipoCaracteristicaRequest;
use App\TiposCaracteristicas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TipoCaracteristicaController extends Controller
{
    protected $guard_name = 'admin';
    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->middleware('permission:list.tipos_caracteristicas')->only(['index','mis_bancos_managment']);
        $this->middleware('permission:create.tipos_caracteristicas')->only(['create','store']);
        $this->middleware('permission:show.tipos_caracteristicas')->only('show');
        $this->middleware('permission:update.tipos_caracteristicas')->only(['edit','update']);
        $this->middleware('permission:delete.tipos_caracteristicas')->only('delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::eloquent(TiposCaracteristicas::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.tipos_caracteristicas');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.tipos_caracteristicas');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }
        return view('crm.propiedades.tipos_caracteristicas.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('crm.propiedades.tipos_caracteristicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoCaracteristicaRequest $request)
    {
        Company::getInfo()->tipos_caracteristicas()->create($request->all());

        return redirect(route('tipos_caracteristicas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TiposCaracteristicas $tipos_caracteristica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposCaracteristicas $tipos_caracteristica)
    {
        return view('crm.propiedades.tipos_caracteristicas.edit',compact('tipos_caracteristica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoCaracteristicaRequest $request, TiposCaracteristicas $tipos_caracteristica)
    {
        $tipos_caracteristica->update($request->all());
        return redirect(route('tipos_caracteristicas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposCaracteristicas $tipos_caracteristica)
    {

    }
}
