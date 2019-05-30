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

Route::get('/', function () {
    return view('welcome');
    // return view('layouts.main_content');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.form');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');



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
    Route::resource('/propiedades','PropiedadesController');
        //Propiedades
        Route::resource('/propiedades/tipos_caracteristicas','TipoCaracteristicaController');


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



    //Users Managment


});


