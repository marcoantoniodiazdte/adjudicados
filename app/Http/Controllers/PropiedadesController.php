<?php

namespace App\Http\Controllers;

use App\Propiedades;
use App\TiposPropiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropiedadesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = Propiedades::all();
        return view('crm.propiedades.list',compact('propiedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_propiedades = TiposPropiedades::all();
        return view('crm.propiedades.create',compact('tipos_propiedades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $propiedad = Propiedades::create([
            'name' => $request->input('name'),
            'tenant_id' => Auth::user()->tenant_id
        ]);
        if($request->has('tipos_propiedad')){
            $propiedad->tiposPropiedad()->attach($request->input('tipos_propiedad'));
        }


        /* $propiedad = Auth::user()->inmobiliaria->propiedades()->create($request->all());
         if($request->has('tipos_propiedad')){
            $propiedad->tiposPropiedad()->attach($request->input('tipos_propiedad'));
         }*/

        return redirect(route('propiedades.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propiedades  $propiedades
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedades $propiedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propiedades  $propiedades
     * @return \Illuminate\Http\Response
     */
    public function edit(Propiedades $propiedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propiedades  $propiedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propiedades $propiedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propiedades  $propiedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedades $propiedades)
    {
        //
    }
}
