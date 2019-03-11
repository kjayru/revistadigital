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
Auth::routes();

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'admin\HomeController@index')->name('dashboard.index')
    ->middleware('permission:dashboard.index');

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




    ///categories
    Route::post('categories/store','admin\CategoryController@store')->name('categories.store')
    ->middleware('permission:categories.create');

    Route::get('categories','admin\CategoryController@index')->name('categories.index')
    ->middleware('permission:categories.index');

    Route::get('categories/create','admin\CategoryController@create')->name('categories.create')
    ->middleware('permission:categories.create');

    Route::put('categories/{category}','admin\CategoryController@update')->name('categories.update')
    ->middleware('permission:categories.edit');

    Route::get('categories/{category}','admin\CategoryController@show')->name('categories.show')
    ->middleware('permission:categories.show');

    Route::delete('categories/{category}','admin\CategoryController@destroy')->name('categories.destroy')
    ->middleware('permission:categories.destroy');

    Route::get('categories/{category}/edit','admin\CategoryController@edit')->name('categories.edit')
    ->middleware('permission:categories.edit');


    ///contents
    Route::post('contents/store','admin\ContentController@store')->name('contents.store')
    ->middleware('permission:contents.create');

    Route::get('contents','admin\ContentController@index')->name('contents.index')
    ->middleware('permission:contents.index');

    Route::get('contents/create','admin\ContentController@create')->name('contents.create')
    ->middleware('permission:contents.create');

    Route::put('contents/{content}','admin\ContentController@update')->name('contents.update')
    ->middleware('permission:contents.edit');

    Route::get('contents/{content}','admin\ContentController@show')->name('contents.show')
    ->middleware('permission:contents.show');

    Route::delete('contents/{content}','admin\ContentController@destroy')->name('contents.destroy')
    ->middleware('permission:contents.destroy');

    Route::get('contents/{content}/edit','admin\ContentController@edit')->name('contents.edit')
    ->middleware('permission:contents.edit');

    Route::get('getvideo','admin\ContentController@getvideo')->name('contents.getvideo')
    ->middleware('permission:contents.index');
    //getgallery
    Route::get('getgallery','admin\ContentController@getgallery')->name('contents.getgallery')
    ->middleware('permission:contents.index');


    Route::post('contents/postpdf','admin\ContentController@postpdf')->name('contents.postpdf')
    ->middleware('permission:contents.index');

    Route::post('contents/postgallery','admin\ContentController@postgallery')->name('contents.postgallery')
    ->middleware('permission:contents:index');

    ///pages
    Route::post('pages/store','admin\PageController@store')->name('pages.store')
    ->middleware('permission:pages.create');

    Route::get('pages','admin\PageController@index')->name('pages.index')
    ->middleware('permission:pages.index');

    Route::get('pages/create','admin\PageController@create')->name('pages.create')
    ->middleware('permission:pages.create');

    Route::put('pages/{page}','admin\PageController@update')->name('pages.update')
    ->middleware('permission:pages.edit');

    Route::get('pages/{page}','admin\PageController@show')->name('pages.show')
    ->middleware('permission:pages.show');

    Route::delete('pages/{page}','admin\PageController@destroy')->name('pages.destroy')
    ->middleware('permission:pages.destroy');

    Route::get('pages/{page}/edit','admin\PageController@edit')->name('pages.edit')
    ->middleware('permission:pages.edit');


    ///historials

    Route::post('historials/store','admin\HistoryController@store')->name('historials.store')
    ->middleware('permission:historials.create');

    Route::get('historials','admin\HistoryController@index')->name('historials.index')
    ->middleware('permission:historials.index');

    Route::get('historials/create','admin\HistoryController@create')->name('historials.create')
    ->middleware('permission:historials.create');

    Route::put('historials/{history}','admin\HistoryController@update')->name('historials.update')
    ->middleware('permission:historials.edit');

    Route::get('historials/{history}','admin\HistoryController@show')->name('historials.show')
    ->middleware('permission:historials.show');

    Route::delete('historials/{history}','admin\HistoryController@destroy')->name('historials.destroy')
    ->middleware('permission:historials.destroy');

    Route::get('historials/{history}/edit','admin\HistoryController@edit')->name('historials.edit')
    ->middleware('permission:historials.edit');


    ///magazines

    Route::post('magazines/store','admin\MagazineController@store')->name('magazines.store')
    ->middleware('permission:magazines.create');

    Route::get('magazines','admin\MagazineController@index')->name('magazines.index')
    ->middleware('permission:magazines.index');

    Route::get('magazines/create','admin\MagazineController@create')->name('magazines.create')
    ->middleware('permission:magazines.create');

    Route::put('magazines/{magazine}','admin\MagazineController@update')->name('magazines.update')
    ->middleware('permission:magazines.edit');

    Route::get('magazines/{magazine}','admin\MagazineController@show')->name('magazines.show')
    ->middleware('permission:magazines.show');

    Route::delete('magazines/{magazine}','admin\MagazineController@destroy')->name('magazines.destroy')
    ->middleware('permission:magazines.destroy');

    Route::get('magazines/{magazine}/edit','admin\MagazineController@edit')->name('magazines.edit')
    ->middleware('permission:magazines.edit');



     ///reportes

     Route::post('reports/store','admin\ReportController@store')->name('reports.store')
     ->middleware('permission:reports.create');

     Route::get('reports','admin\ReportController@index')->name('reports.index')
     ->middleware('permission:reports.index');

     Route::get('reports/create','admin\ReportController@create')->name('reports.create')
     ->middleware('permission:reports.create');

     Route::put('reports/{report}','admin\ReportController@update')->name('reports.update')
     ->middleware('permission:reports.edit');

     Route::get('reports/users','admin\ReportController@reportUser')->name('reports.reportuser')
     ->middleware('permission:reports.index');

     Route::get('reports/categories','admin\ReportController@reportCategory')->name('reports.reportcategory')
     ->middleware('permission:reports.index');

     Route::get('reports/label','admin\ReportController@reportLabel')->name('reports.reportlabel')
     ->middleware('permission:reports.index');

     Route::get('reports/{report}','admin\ReportController@show')->name('reports.show')
     ->middleware('permission:reports.show');

     Route::delete('reports/{report}','admin\ReportController@destroy')->name('reports.destroy')
     ->middleware('permission:reports.destroy');



     //slider
     Route::post('sliders/store','admin\SliderController@store')->name('sliders.store')
     ->middleware('permission:sliders.create');

     Route::get('sliders','admin\SliderController@index')->name('sliders.index')
     ->middleware('permission:sliders.index');

     Route::get('sliders/create','admin\SliderController@create')->name('sliders.create')
     ->middleware('permission:sliders.create');

     Route::put('sliders/{slider}','admin\SliderController@update')->name('sliders.update')
     ->middleware('permission:sliders.edit');

     Route::get('sliders/{slider}','admin\SliderController@show')->name('sliders.show')
     ->middleware('permission:sliders.show');

     Route::delete('sliders/{slider}','admin\SliderController@destroy')->name('sliders.destroy')
     ->middleware('permission:sliders.destroy');

     Route::get('sliders/{slider}/edit','admin\SliderController@edit')->name('sliders.edit')
     ->middleware('permission:sliders.edit');

     Route::post('sliders/delete','admin\SliderController@deleteItem')->name('sliders.deleteitem')
     ->middleware('permission:sliders.destroy');

     Route::post('sliders/estado','admin\SliderController@estado')->name('sliders.estado')
     ->middleware('permission:sliders.edit');


     //videos
     Route::post('videos/store','admin\VideoController@store')->name('videos.store')
     ->middleware('permission:videos.create');

     Route::get('videos','admin\VideoController@index')->name('videos.index')
     ->middleware('permission:videos.index');

     Route::get('videos/create','admin\VideoController@create')->name('videos.create')
     ->middleware('permission:videos.create');

     Route::put('videos/{slider}','admin\VideoController@update')->name('videos.update')
     ->middleware('permission:videos.edit');

     Route::get('videos/{slider}','admin\VideoController@show')->name('videos.show')
     ->middleware('permission:videos.show');

     Route::delete('videos/{slider}','admin\VideoController@destroy')->name('videos.destroy')
     ->middleware('permission:videos.destroy');

     Route::get('videos/{slider}/edit','admin\VideoController@edit')->name('videos.edit')
     ->middleware('permission:videos.edit');

     Route::post('videos/destacado','admin\VideoController@destacar')->name('videos.destacado')
     ->middleware('permission:videos.edit');

     Route::post('videos/estado','admin\VideoController@estado')->name('videos.estado')
     ->middleware('permission:videos.edit');

     ///usuarios

     Route::post('users/store','admin\UserController@store')->name('users.store')
     ->middleware('permission:users.create');

     Route::get('users','admin\UserController@index')->name('users.index')
     ->middleware('permission:users.index');

     Route::get('users/create','admin\UserController@create')->name('users.create')
     ->middleware('permission:users.create');

     Route::put('users/{user}','admin\UserController@update')->name('users.update')
     ->middleware('permission:users.edit');

     Route::get('users/{user}','admin\UserController@show')->name('users.show')
     ->middleware('permission:users.show');

     Route::delete('users/{user}','admin\UserController@destroy')->name('users.destroy')
     ->middleware('permission:users.destroy');

     Route::get('users/{user}/edit','admin\UserController@edit')->name('users.edit')
     ->middleware('permission:users.edit');

     Route::get('cargamasiva','admin\UserController@cargamasiva')->name('users.carga')
     ->middleware('permission:users.create');

     Route::post('proceso','admin\UserController@proceso')->name('users.proceso')
     ->middleware('permission:users.create');
});

Route::get('/', 'HomeController@index')->name('home');

Route::post('/reportes/store','HomeController@reporte')->name('reporte.store');

Route::get('/{url}', 'admin\HomeController@show')->name('fronts.index')
->middleware('permission:fronts.index');



