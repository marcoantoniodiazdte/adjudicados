<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\Admin;
use App\Module;
use App\Company;
use App\User;
use App\TiposPropiedades;
use Illuminate\Support\Facades\Hash;
use App\Banco;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $banco_bpd = Banco::create(['name' => 'Banco Popular Dominicano','short_name' => 'BPD']);
        $banco_bhd = Banco::create(['name' => 'Banco BHD','short_name' => 'BHD']);

          $super_inmobiliaria = Company::create(['name' => 'DteSuperInmobiliaria','description' => 'DteSuperInmobiliaria','company_type'=>'inmobiliaria']);

        // Create a superadmin for the admin users
        $super_admin = Admin::create([
            'company_id'          => 1,
            'nombres'          => 'Super Admin',
            'email'         => 'superadmin@gmail.com',
            'password'      => 'superadmin@gmail.com',
        ]);

        //Grupos_modelos_bloques



        Module::create(['name' => 'inmobiliarias','title' => 'Inmobiliaras','description' => 'Inmobiliaras','clase' => 'inmo_management','icon' => 'home' ,'color' => 'col-light-blue' ,'base_url' => 'admin/inmobiliarias']); // Modulo 1
        Module::create(['name' => 'users','title' => 'Usuarios','description' => 'Usuarios','clase' => 'user_management','icon' => 'person' ,'color' => 'col-light-blue' ,'base_url' => 'admin_users_managment']); // Modulo 2
        Module::create(['name' => 'roles','title' => 'Roles','description' => 'Roles', 'clase' => 'user_management' ,'icon' => 'account_box' ,'color' => 'col-deep-orange' ,'base_url' => 'admin_roles_managment']); // Modulo 3
        Module::create(['name' => 'propiedades','title' => 'Propiedades','description' => 'Propiedades', 'clase' => 'propiedad_management' ,'icon' => 'home' ,'color' => 'col-deep-orange' ,'base_url' => 'admin/propiedades']); // Modulo 4
        Module::create(['name' => 'bancos','title' => 'Bancos','description' => 'Bancos', 'clase' => 'banco_management' ,'icon' => 'home' ,'color' => 'col-deep-orange' ,'base_url' => 'banco.admin']);// Modulo 5
        Module::create(['name' => 'agencias','title' => 'Agencias','description' => 'Agencias', 'clase' => 'agencia_management' ,'icon' => 'work' ,'color' => 'col-deep-orange' ,'base_url' => 'banco.admin']); // Modulo 6
        Module::create(['name' => 'vendedores','title' => 'Vendedores','description' => 'Vendedores', 'clase' => 'vendedores_management' ,'icon' => 'person' ,'color' => 'col-deep-orange' ,'base_url' => 'banco.admin']); // Modulo 7
        Module::create(['name' => 'contratos','title' => 'Contratos','description' => 'Contratos', 'clase' => 'contratos_management' ,'icon' => 'person' ,'color' => 'col-deep-orange' ,'base_url' => 'banco.admin']); // Modulo 8


//        $super_inmobiliaria->bancos()->attach(1,['tipo_cuenta'=>'ahorros','tipo_moneda'=>'USD']);
//        $super_inmobiliaria->bancos()->attach(2,['tipo_cuenta'=>'corriente','tipo_moneda'=>'DOP']);

          $super_inmobiliaria->modules()->sync(Module::all());
////      $primera_inmobiliaria->modules()->sync([2,3,4]);



          $role_super = Role::create(['guard_name' => 'admin', 'name' => 'Super-Administrador', 'description' => 'Administra la Plataforma', 'active' => 'true']);
          $role_inmobiliaria = Role::create(['guard_name' => 'admin', 'name' => 'Administrador Inmobiliaria','description' => 'Administrador de la Inmobiliaria', 'active' => 'true']);
          $role_agencia = Role::create(['guard_name' => 'admin', 'name' => 'Administrador Agencias','description' => 'Administrador de la Agencia', 'active' => 'true']);

          $super_admin->assignRole(Role::all());
////      $user_inmobiliaria->assignRole(Role::find(2));
//
        // create permissions inmobiliarias
        Permission::create(['guard_name' => 'admin','name' => 'list.inmobiliarias','title'=>'Listar Inmobiliaras', 'modulo_id' => 1]);
        Permission::create(['guard_name' => 'admin','name' => 'create.inmobiliarias','title'=>'Crear Inmobiliarias' , 'modulo_id' => 1]);
        Permission::create(['guard_name' => 'admin','name' => 'show.inmobiliarias','title'=>'Consultar Inmobiliaria' , 'modulo_id' => 1]);
        Permission::create(['guard_name' => 'admin','name' => 'update.inmobiliarias','title'=>'Editar Inmobiliaria', 'modulo_id' => 1]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.inmobiliarias','title'=>'Eliminar Inmobiliaria', 'modulo_id' => 1]);

        // create permissions users
        Permission::create(['guard_name' => 'admin','name' => 'list.users', 'title'=>'Listar Usuarios', 'modulo_id' => 2]);
        Permission::create(['guard_name' => 'admin','name' => 'create.users', 'title'=>'Crear Usuarios' , 'modulo_id' => 2]);
        Permission::create(['guard_name' => 'admin','name' => 'show.users' , 'title'=>'Consultar Usuarios', 'modulo_id' => 2]);
        Permission::create(['guard_name' => 'admin','name' => 'update.users' , 'title'=>'Editar Usuarios', 'modulo_id' => 2]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.users', 'title'=>'Eliminar Usuarios' , 'modulo_id' => 2]);

        // create permissions roles
        Permission::create(['guard_name' => 'admin','name' => 'list.roles', 'title'=>'Listar Roles' , 'modulo_id' => 3]);
        Permission::create(['guard_name' => 'admin','name' => 'create.roles', 'title'=>'Crear Roles' , 'modulo_id' => 3]);
        Permission::create(['guard_name' => 'admin','name' => 'show.roles', 'title'=>'Consultar Roles' , 'modulo_id' => 3]);
        Permission::create(['guard_name' => 'admin','name' => 'update.roles', 'title'=>'Editar Roles' , 'modulo_id' => 3]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.roles', 'title'=>'Eliminar Roles' , 'modulo_id' => 3]);


        // create permissions propiedades
        Permission::create(['guard_name' => 'admin','name' => 'list.propiedades', 'title'=>'Listar Propiedades' , 'modulo_id' => 4]);
        Permission::create(['guard_name' => 'admin','name' => 'create.propiedades', 'title'=>'Crear Propiedades' , 'modulo_id' => 4]);
        Permission::create(['guard_name' => 'admin','name' => 'show.propiedades', 'title'=>'Consultar Propiedades' , 'modulo_id' => 4]);
        Permission::create(['guard_name' => 'admin','name' => 'update.propiedades' , 'title'=>'Editar Propiedades', 'modulo_id' => 4]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.propiedades', 'title'=>'Eliminar Propiedades' , 'modulo_id' => 4]);

                //Tipos Caracteristicas
                Permission::create(['guard_name' => 'admin','name' => 'list.tipos_caracteristicas', 'title'=>'Listar Tipos Caracteristicas' , 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'create.tipos_caracteristicas', 'title'=>'Crear Tipos Caracteristicas' , 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'show.tipos_caracteristicas', 'title'=>'Consultar Tipos Caracteristicas' , 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'update.tipos_caracteristicas' , 'title'=>'Editar Tipos Caracteristicas', 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'delete.tipos_caracteristicas', 'title'=>'Eliminar Tipos Caracteristicas' , 'modulo_id' => 4]);

                //Tipos Atrinuots
                Permission::create(['guard_name' => 'admin','name' => 'list.tipos_atributos', 'title'=>'Listar Tipos Atributos' , 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'create.tipos_atributos', 'title'=>'Crear Tipos Atributos' , 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'show.tipos_atributos', 'title'=>'Consultar Tipos Atributos' , 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'update.tipos_atributos' , 'title'=>'Editar Tipos Atributos', 'modulo_id' => 4]);
                Permission::create(['guard_name' => 'admin','name' => 'delete.tipos_atributos', 'title'=>'Eliminar Tipos Atributos' , 'modulo_id' => 4]);


        // create permissions Bancos
        Permission::create(['guard_name' => 'admin','name' => 'list.bancos', 'title'=>'Listar Bancos' , 'modulo_id' => 5]);
        Permission::create(['guard_name' => 'admin','name' => 'create.bancos', 'title'=>'Crear Bancos' , 'modulo_id' => 5]);
        Permission::create(['guard_name' => 'admin','name' => 'show.bancos', 'title'=>'Consultar Bancos' , 'modulo_id' => 5]);
        Permission::create(['guard_name' => 'admin','name' => 'update.bancos' , 'title'=>'Editar Bancos', 'modulo_id' => 5]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.bancos', 'title'=>'Eliminar Bancos' , 'modulo_id' => 5]);

        // create permissions Agencias
        Permission::create(['guard_name' => 'admin','name' => 'list.agencias', 'title'=>'Listar Agencias' , 'modulo_id' => 6]);
        Permission::create(['guard_name' => 'admin','name' => 'create.agencias', 'title'=>'Crear Agencias' , 'modulo_id' => 6]);
        Permission::create(['guard_name' => 'admin','name' => 'show.agencias', 'title'=>'Consultar Agencias' , 'modulo_id' => 6]);
        Permission::create(['guard_name' => 'admin','name' => 'update.agencias' , 'title'=>'Editar Agencias', 'modulo_id' => 6]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.agencias', 'title'=>'Eliminar Agencias' , 'modulo_id' => 6]);

        // create permissions Vendedores
        Permission::create(['guard_name' => 'admin','name' => 'list.vendedores', 'title'=>'Listar Vendedores' , 'modulo_id' => 7]);
        Permission::create(['guard_name' => 'admin','name' => 'create.vendedores', 'title'=>'Crear Vendedores' , 'modulo_id' => 7]);
        Permission::create(['guard_name' => 'admin','name' => 'show.vendedores', 'title'=>'Consultar Vendedores' , 'modulo_id' => 7]);
        Permission::create(['guard_name' => 'admin','name' => 'update.vendedores' , 'title'=>'Editar Vendedores', 'modulo_id' => 7]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.vendedores', 'title'=>'Eliminar Vendedores' , 'modulo_id' => 7]);

        // create permissions Contratos
        Permission::create(['guard_name' => 'admin','name' => 'list.contratos', 'title'=>'Listar Contratos' , 'modulo_id' => 8]);
        Permission::create(['guard_name' => 'admin','name' => 'create.contratos', 'title'=>'Crear Contratos' , 'modulo_id' => 8]);
        Permission::create(['guard_name' => 'admin','name' => 'show.contratos', 'title'=>'Consultar Contratos' , 'modulo_id' => 8]);
        Permission::create(['guard_name' => 'admin','name' => 'update.contratos' , 'title'=>'Editar Contratos', 'modulo_id' => 8]);
        Permission::create(['guard_name' => 'admin','name' => 'delete.contratos', 'title'=>'Eliminar Contratos' , 'modulo_id' => 8]);


        $role_super->syncPermissions(Permission::all());
        $super_admin->syncPermissions(Permission::all());
        //$role_agencia->syncPermissions(Permission::all());

//
//
        foreach (Permission::all() as $permiso){
            if($permiso->modulo_id == 1 || $permiso->modulo_id == 6  || $permiso->modulo_id == 7  || $permiso->modulo_id == 8){
                continue;
            }
            $role_inmobiliaria->givePermissionTo($permiso);
        }


        //  $role_inmobiliaria->syncPermissions(Permission::where('modulo_id',2)->first());
//        $role_inmobiliaria->syncPermissions(Permission::where('modulo_id', 3)->get());
//        $role_inmobiliaria->syncPermissions(Permission::where('modulo_id', 4)->get());

       /* $user_inmobiliaria->syncPermissions(Permission::where('modulo_id', 2)->get());
        $user_inmobiliaria->syncPermissions(Permission::where('modulo_id', 3)->get());
        $user_inmobiliaria->syncPermissions(Permission::where('modulo_id', 4)->get());*/


        TiposPropiedades::create(['name' => 'Apartamento']);
        TiposPropiedades::create(['name' => 'Edificio']);
        TiposPropiedades::create(['name' => 'Casa']);
        TiposPropiedades::create(['name' => 'Finca']);
        TiposPropiedades::create(['name' => 'Hotel']);
        TiposPropiedades::create(['name' => 'Locales y Oficinas']);
        TiposPropiedades::create(['name' => 'Naves']);
        TiposPropiedades::create(['name' => 'Negocios']);
        TiposPropiedades::create(['name' => 'PentHouse']);
        TiposPropiedades::create(['name' => 'Prop. Turisticas']);
        TiposPropiedades::create(['name' => 'Solares']);
        TiposPropiedades::create(['name' => 'Villas']);
        /*factory(TiposPropiedades::class,5)->create();*/

    }
}
