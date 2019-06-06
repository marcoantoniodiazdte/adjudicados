<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminFormRequest;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:admin');

        //  $this->middleware('permission:list.users')->only('index');
        $this->middleware('permission:create.users')->only(['create','store']);
        $this->middleware('permission:show.users')->only('show');
        $this->middleware('permission:update.users')->only(['edit','update']);
        $this->middleware('permission:delete.users')->only('delete');
    }

    public function index()
    {
        return view('crm.admin.dashboard');
    }

    public function users_managment(Request $request)
    {
        if($request->ajax()){
            return  DataTables::eloquent(Admin::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.users');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.users');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }
        return view('crm.users_managment.list');
    }

    public function create()
    {
        $roles = Role::all();
        return view('crm.users_managment.create',compact('roles'));
    }

    public function store(AdminFormRequest $request)
    {


        $admin = Admin::create([
            'company_id'    => Auth::user()->company_id,
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => $request->password,
        ]);


        /*$admin = Admin::create([
            'company_id'          => Auth::user()->company_id,
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            'password'      => $request->input('password'),
        ]);*/
        /*$admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->company_id = Auth::user()->company_id;
        $admin->save();*/

        if($admin){
            if($request->has('roles_suario')){
                $admin->assignRole($request->input('roles_suario'));
                $admin->syncPermissions($admin->getPermissionsViaRoles()->unique('id'));
            }
            return redirect(route('admin_users_managment'));
        }
    }

    public function show(Admin $admin)
    {
        dd($admin);
    }

    public function edit(Admin $admin)
    {
        $admin->load('roles');
        $company_roles = Role::all();
        return view('crm.users_managment.edit',compact(['admin','company_roles']));
    }

    public function update(Request $request, Admin $admin)
    {

        $admin->update($request->all());

        if($request->has('roles_suario')){

            $admin->syncRoles($request->input('roles_suario'));
            $admin->syncPermissions($admin->getPermissionsViaRoles()->unique('id'));
//            $unique = $admin->getPermissionsViaRoles()->unique('id');
//
//            $unique->values()->all();
//            dd($unique);
//
//            foreach ($request->input('roles_suario') as $role_id){
//                $role = Role::find($role_id);
//                $admin->syncPermissions($role->permissions);
//
//            }
            //$admin->syncPermissions($role->permissions);
            //$admin->givePermissionTo($role->permissions);
        }
        return redirect(route('admin_users_managment'));

    }

    public function destroy(Admin $admin)
    {
        //
    }








}
