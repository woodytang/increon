<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/brands', 'HomeController@listBrands');

Route::get('/brand/{id}', 'HomeController@showBrand');

Route::get('/lang', 'HomeController@showLang');

Route::get('/brand/{id}/locations', 'HomeController@listBrandLocations');



Route::group(['namespace' => 'Admin','prefix'=>'admin'], function () {
    CRUD::resource('brand', 'BrandCrudController');
    CRUD::resource('location', 'LocationCrudController');
});

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
