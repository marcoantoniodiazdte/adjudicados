<?php

namespace App\Http\Controllers;
use App\Contacto;
use App\Inmobiliaria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class ContactoController extends Controller
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
            return  DataTables::eloquent(Contacto::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.contactos.list');
    }

    public function create() {
        return view('crm.contactos.create',[
            'inmobiliarias' => Inmobiliaria::all()
        ]);
    }

    public function store(Request $request) {
        // dd($request->all());
        $contacto = Contacto::create($request->all());
        return redirect()->action('ContactoController@index');
    }

    public function edit($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('crm.contactos.edit',[
            'contacto' => $contacto,
            'inmobiliarias' => Inmobiliaria::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->update($request->all());
        return redirect()->action('ContactoController@index');

    }
}
