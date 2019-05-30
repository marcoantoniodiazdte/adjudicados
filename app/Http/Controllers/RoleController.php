<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->middleware('permission:list.roles')->only('index');
        $this->middleware('permission:create.roles')->only(['create','store']);
        $this->middleware('permission:show.roles')->only('show');
        $this->middleware('permission:update.roles')->only(['edit','update']);
        $this->middleware('permission:delete.roles')->only('delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return  DataTables::eloquent(Role::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.roles_managment.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules_permisos = Auth::user()->inmobiliaria->getModulosConPermisos();

        return view('crm.roles_managment.create',compact('modules_permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role($request->all());

        if($request->has('roles_permisos')){
            $role->syncPermissions($request->input('roles_permisos'));
        }

        return redirect(route('admin_roles_managment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('crm.roles_managment.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {

        $role->load('permissions');

        $modules_permisos = Auth::user()->company->getModulosConPermisos();

        return view('crm.roles_managment.edit',compact(['role','modules_permisos']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        if($request->has('roles_permisos')){
            $role->syncPermissions($request->input('roles_permisos'));

            foreach ($role->getAdminsWithRole($role) as $admin){

                $admin->syncPermissions($admin->getPermissionsViaRoles()->unique('id'));
            }
        }
        return redirect(route('admin_roles_managment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
