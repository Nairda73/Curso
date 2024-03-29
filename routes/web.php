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




Route::view('welcome', 'welcome');
Route::view('adrian', 'adrian');
Route::view('laravel', 'laravel');

Route::get('/', 'InicioController@index');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');

    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::post('mane/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');

    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');

    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
});

