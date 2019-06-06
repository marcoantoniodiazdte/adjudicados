<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequestForm;
use App\Http\Requests\CreateInmobiliariaRequest;
use App\Inmobiliaria;
use App\Module;
use App\Role;
use App\TiposAtributos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:Super-Administrador');
    }

    public function index(Request $request ,$company_type = null,$vista = null)
    {

        if ($request->ajax()) {
            return DataTables::eloquent(Company::query()->where('company_type',$company_type))
                ->addColumn('edit', function($row){
                    return Auth::user()->hasRole('Super-Administrador');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->hasRole('Super-Administrador');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view($vista);
    }

    public function create($company_type = null,$vista = null)
    {


        $modulos = Module::orderBy('name')->get();
        $roles = Role::all();
        return view($vista,compact(['modulos','roles','company_type']));
    }

    public function store(CompanyRequestForm $request)
    {
        $company =  Company::create($request->all());
       /* if ($company){
            Storage::makeDirectory($company->name);
        }*/

        // $company =  Inmobiliaria::find(2);
        // Create a Inmobiliara  admin
        $admin = $company->createAdministrador($request->all());


        //$admin = $company->admin()->create($request->all());
        if($request->has('modulos')){
            $company->modules()->sync($request->input('modulos'));
        }

        if($request->has('roles_administrador')){

            foreach ($request->input('roles_administrador') as $role_id){
                $role = Role::find($role_id);
                $nuevo_role_company = $company->crearRole(array(
                    'name' => $role->name,
                    'description' => $role->description,
                ));

                $nuevo_role_company->syncPermissions($role->permissions);
                $admin->assignRole($nuevo_role_company);
                $admin->syncPermissions($role->permissions);
            }
            /* $company->roles()->sync($request->input('roles_administrador'));
             $admin->assignRole($request->input('roles_administrador'));*/
        }


        return redirect(route('companys.index'));
    }


    public function show(Company $company,$vista = null)
    {
        $company->load(['modules','admin']);
        return view($vista,compact('company'));
    }

    public function edit(Company $company,$vista = null)
    {
        $modulos = Module::orderBy('name')->get();

        $company->load('admin','modules');

        return view($vista,compact(['company','modulos']));
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->all());


        if($request->has('modulos')){

            $company->modules()->sync($request->input('modulos'));
        }
        $company->admin->update($request->all());

        /*"_method" => "PATCH"
          "name" => "Admin Tercera Inmobiliaria Updated"
          "description" => "Tercera Inmobiliaria Updated"
          "modulos" => array:4 [
            0 => "5"
            1 => "4"
            2 => "3"
            3 => "2"
          ]
          "email" => "superadmin_3@gmail.com"
          "password" => "superadmin_3@gmail.com"*/



    }

    public function destroy(Company $company)
    {
        //
    }


}
