<?php

namespace App\Http\Controllers;

use App\Banco;
use App\Http\Requests\BancoFormRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class BancoController extends Controller
{

    protected $guard_name = 'admin';
    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->middleware('permission:list.bancos')->only(['index','mis_bancos_managment']);
        $this->middleware('permission:create.bancos')->only(['create','store']);
        $this->middleware('permission:show.bancos')->only('show');
        $this->middleware('permission:update.bancos')->only(['edit','update']);
        $this->middleware('permission:delete.bancos')->only('delete');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::eloquent(Banco::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.bancos');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.bancos');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }
        return view('crm.bancos.list');
    }

    public function create()
    {
        return view('crm.bancos.create');
    }

    public function store(BancoFormRequest $request)
    {
        Banco::create($request->all());
        return redirect(route('bancos.index'));

    }
    public function show(Banco $banco)
    {

    }

    public function edit(Banco $banco)
    {
        return view('crm.bancos.edit',compact('banco'));
    }

    public function update(BancoFormRequest $request, Banco $banco)
    {
        $banco->fill($request->only($banco->getFillable()));
        if($banco->isDirty()){
            $banco->save();
        }
        return redirect(route('bancos.index'));
        /* dd($banco->isDirty());
         $banco->update($request->all());*/
    }

    public function destroy(Banco $banco)
    {
        //
    }
    public function mis_bancos_managment(Request $request){

        $mis_bancos = Auth::user()->company->bancos;

        if ($request->ajax()) {
            return DataTables::collection($mis_bancos)
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.bancos');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.bancos');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }


        return view('crm.bancos.mis_bancos_list');
    }

    public function mis_bancos_managment_create(){
        $informacion_bancos = array(
            'bancos'        =>   $bancos = Banco::all(),
            'tipos_cuentas' =>   Banco::TIPOS_CUENTAS,
            'tipos_monedas' =>   Banco::TIPOS_MONEDAS,
        );
        return view('crm.bancos.mis_bancos_create',compact('informacion_bancos'));
    }

    public function mis_bancos_managment_store(Request $request){

        try{
            Auth::user()->company->crearBanco($request);
        }catch (QueryException $exception){

        }
        return redirect(route('admin_mis_bancos_managment'));
    }



}
