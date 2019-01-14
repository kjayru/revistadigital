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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'admin\HomeController@index')->name('admin');


    //Roles
    Route::post('roles/store','admin\RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles','admin\RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create','admin\RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}','admin\RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}','admin\RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}','admin\RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','admin\RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //Permissions
    Route::post('permissions/store','admin\PermissionController@store')->name('permissions.store')
    ->middleware('permission:permissions.create');

    Route::get('permissions','admin\PermissionController@index')->name('permissions.index')
    ->middleware('permission:permissions.index');

    Route::get('permissions/create','admin\PermissionController@create')->name('permissions.create')
    ->middleware('permission:permissions.create');

    Route::put('permissions/{role}','admin\PermissionController@update')->name('permissions.update')
    ->middleware('permission:permissions.edit');

    Route::get('permissions/{role}','admin\PermissionController@show')->name('permissions.show')
    ->middleware('permission:permissions.show');

    Route::delete('permissions/{role}','admin\PermissionController@destroy')->name('permissions.destroy')
    ->middleware('permission:permissions.destroy');

    Route::get('permissions/{role}/edit','admin\PermissionController@edit')->name('permissions.edit')
    ->middleware('permission:permissions.edit');
});
