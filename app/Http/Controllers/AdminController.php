<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Categoria;
use App\Module;
use App\AnalistaCategoria;
use App\Http\Requests\AdminFormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        $categorias = Categoria::all();
        return view('crm.users_managment.create',compact('categorias'));
    }

    public function store(Request $request)
    {   
        


        $admin = Admin::create([
            'company_id'    => Auth::user()->company_id,
            'nombres'            => $request->nombres,
            'apellidos'          => $request->apellidos,
            'telefono_principal' => $request->telefono_principal,
            'email'         => $request->email,
            'password'      => $request->password,
            'role'          => $request->role,
        ]);



        if($admin){
            $admin->assignRole('Administrador Inmobiliaria');    
            if($request->has('categoria_analista')){
                foreach( $request->categoria_analista as $categoria ) {
                    AnalistaCategoria::create([
                        'analista_id' => $admin->id,
                        'categoria_id' => $categoria
                    ]);
                }
            }
            return redirect(route('admin_users_managment'));
        }


        return redirect()->action('AdminController@index');


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

    
    }

    public function show(Admin $admin)
    {
        dd($admin);
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        $misCategorias = AnalistaCategoria::where('analista_id',$id)->get();   
        $categorias = Categoria::whereNotIn('id',$misCategorias->pluck('categoria_id'))->get();
        return view('crm.users_managment.edit',compact(['categorias','admin']));
    }

    public function update(Request $request, Admin $admin)
    {

        $admin->update($request->all());

        if($admin){
            if($request->has('categoria_analista')){
                foreach( $request->categoria_analista as $categoria ) {
                    AnalistaCategoria::create([
                        'analista_id' => $admin->id,
                        'categoria_id' => $categoria
                    ]);
                }
            }
            return redirect(route('admin_users_managment'));
        }

        // if($request->has('roles_suario')){

        //     $admin->syncRoles($request->input('roles_suario'));
        //     $admin->syncPermissions($admin->getPermissionsViaRoles()->unique('id'));
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
        // }
        return redirect(route('admin_users_managment'));

    }

    public function destroy(Admin $admin)
    {
        //
    }








}
