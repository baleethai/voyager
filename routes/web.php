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


Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

    // Products Routes
    Route::group(['as' => 'voyager.'], function() {
    	Route::resource('products', 'VoyagerProductsController');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
