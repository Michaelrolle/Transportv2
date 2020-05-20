<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::group(['prefix' => 'clients'], function () {
    Route::get('', 'ClientController@index');
    Route::get('create', 'ClientController@create');
    Route::get('{client}', 'ClientController@show');
    Route::post('store', 'ClientController@store');
    Route::get('{clients}/edit', 'ClientController@edit');
    Route::put('{clients}', 'ClientController@update');
});


Route::group(['prefix' => 'drivers'], function () {
    Route::get('', 'DriverController@index');
    Route::get('create', 'DriverController@create');
    Route::get('{driver}', 'DriverController@show');
    Route::post('store', 'DriverController@store');
    Route::get('{driver}/edit', 'DriverController@edit');
    Route::put('{drivers}', 'DriverController@update');
});


Route::group(['prefix' => 'locations'], function () {
    Route::get('', 'LocationController@index');
    Route::get('create', 'LocationController@create');
    Route::get('{location}', 'LocationController@show');
    Route::post('store', 'LocationController@store');
    Route::get('{locations}/edit', 'LocationController@edit');
    Route::put('{locations}', 'LocationController@update');
});


Route::group(['prefix' => 'orders'], function () {
    Route::get('', 'OrderController@index');
    Route::get('create', 'OrderController@create');
    Route::get('{order}', 'OrderController@show');
    Route::post('store', 'OrderController@store');
    Route::get('{orders}/edit', 'OrderController@edit');
    Route::put('{orders}', 'OrderController@update');
});


Route::name(['prefix' => 'products'], function () {
    Route::get('', 'ProductController@index');
    Route::get('create', 'ProductController@create');
    Route::get('{product}', 'ProductController@show');
    Route::post('store', 'ProductController@store');
    Route::get('{products}/edit', 'ProductController@edit');
    Route::put('{products}', 'ProductController@update');
});
