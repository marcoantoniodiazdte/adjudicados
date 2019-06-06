<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','WelcomeController@index');
Route::get('/home','WelcomeController@index');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.form');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logoutAdmin', 'Auth\AdminLoginController@logoutAdmin')->name('admin.logoutAdmin');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');



    //Route::resource('/users_managment','RoleController',['as' =>'admin']);
    Route::get('/users_managment', 'AdminController@users_managment')->name('admin_users_managment');
    Route::get('/users_managment/user/create', 'AdminController@create')->name('admin_users_managment_create');
    Route::post('/users_managment/store', 'AdminController@store')->name('admin_users_managment_store');
    Route::get('/users_managment/user/{admin}', 'AdminController@show')->name('admin_users_managment_show');
    Route::patch('/users_managment/user/{admin}', 'AdminController@update')->name('admin_users_managment_update');
    Route::get('/users_managment/user/{admin}/edit', 'AdminController@edit')->name('admin_users_managment_edit');

    //Roles

    Route::get('/roles_managment', 'RoleController@index')->name('admin_roles_managment');
    Route::get('/roles_managment/role/create', 'RoleController@create')->name('admin_roles_managment_create');
    Route::post('/roles_managment/store', 'RoleController@store')->name('admin_roles_managment_store');
    Route::get('/roles_managment/role/{role}', 'RoleController@show')->name('admin_roles_managment_show');
    Route::patch('/roles_managment/role/{role}', 'RoleController@update')->name('admin_roles_managment_update');
    Route::get('/roles_managment/role/{role}/edit', 'RoleController@edit')->name('admin_roles_managment_edit');


    Route::resource('/modules','ModuleController');

    //Agencias
    Route::resource('/agencias','AgenciaController', ['parameters' => [
        'agencias' => 'company',
    ]]);
    //Inmobiliarias
    Route::resource('inmobiliarias', 'InmobiliariaController', ['parameters' => [
        'inmobiliarias' => 'company',
    ]]);

    //Propiedades
    Route::resource('/propiedades','PropiedadesController',['parameters' => ['propiedades' => 'propiedades']]);
        //Propiedades
        Route::resource('/tipos_caracteristicas','TipoCaracteristicaController');
        Route::resource('/tipos_atributos','TipoAtributoController');

    Route::resource('/propiedades.atributos','AtributosPropiedadesController');

    //Proyectos
    Route::resource('/proyectos','ProyectosController');






    Route::get('/bancos/mis_bancos','BancoController@mis_bancos_managment')->name('admin_mis_bancos_managment');
    Route::get('/bancos/mis_bancos/create','BancoController@mis_bancos_managment_create')->name('admin_mis_bancos_managment_create');
    Route::post('/bancos/mis_bancos/store','BancoController@mis_bancos_managment_store')->name('admin_mis_bancos_managment_store');
    Route::get('/bancos/mis_bancos/{id}/edit', 'BancoController@mis_bancos_managment_edit')->name('admin_mis_bancos_managment_edit');
    Route::patch('/bancos/mis_bancos/{banco}', 'BancoController@mis_bancos_managment_update')->name('admin_mis_bancos_managment_update');
    Route::resource('/bancos','BancoController');

    /*//Bancos
    Route::get('/bancos', 'BancoController@index')->name('bancos.index');
    Route::get('/bancos/create', 'BancoController@create')->name('bancos.create');
    Route::post('/bancos', 'BancoController@store')->name('bancos.store');
    Route::get('/bancos/{banco}/edit', 'BancoController@edit')->name('bancos.edit');*/

   //Get Municipios by provincia

    Route::get('/provincia/{provincia_id}/municipios','MunicipioController@get_municipios_by_pronvicia')->name('municipios_by_provincia');


    //Get Sectores by municipio

    Route::get('/municipio/{municipio_id}/sectores','SectorController@get_sectores_by_municipio')->name('sectores_by_municipios');


});


Route::get('/login','WelcomeController@index')->name('login');
Route::get('/','WelcomeController@index')->name('inicio');
Route::get('/buscar','WelcomeController@search')->name('buscar');


Route::post('/profile/update','GuestController@update')->name('update.profile');
Route::post('/profile/password','GuestController@update_password')->name('update.password');


/////////////////////////////////////////////////////








// PROYECTO //
Route::get('/proyecto/1',function(){
    return view('welcome.projects.view1');
});

Route::get('/registro', function(){
    return view('welcome.register');
})->name('registro');

Route::get('/ingresa', function(){
    return view('welcome.login');
})->name('ingresa');

Route::get('/proyecto/2',function(){
    return view('welcome.projects.view2');
});

 

// AGENTES//
Route::get('/agente/1',function(){
    return view('welcome.agends.show');
});
// AGENTES//

Route::get('/inmobiliarias',function(){
    return view('welcome.real_estate.index');
})->name('inmobiliarias');


// CONTACTANOS//
Route::get('/contacto',function(){
    return view('welcome.company.contact');
})->name('contacto');
// CONTACTANOS//

Route::get('/perfil', function () {
    return view('welcome.profile.show');
})->middleware('auth')->name('profile');

Route::get('/perfil/propiedades', function () {
    return view('welcome.profile.properties');
})->name('profile.properties');

Route::get('/perfil/propiedades/favoritas', function () {
    return view('welcome.profile.favorities');
})->name('profile.favorites');

Route::get('/perfil/credenciales', function () {
    return view('welcome.profile.password');
})->name('credenciales');



