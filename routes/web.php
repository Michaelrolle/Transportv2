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
    Route::get('{client}/edit', 'ClientController@edit');
    Route::put('{client}', 'ClientController@update');
});


Route::group(['prefix' => 'drivers', 'as' => 'drivers.'], function () {
    Route::get('', 'DriverController@index');
    Route::get('create', 'DriverController@create')->name('create');
    Route::get('{driver}', 'DriverController@show')->name('show');
    Route::post('store', 'DriverController@store')->name('store');
    Route::get('{driver}/edit', 'DriverController@edit')->name('edit');
    Route::put('{driver}', 'DriverController@update')->name('update');
    Route::delete('{driver}', 'DriverController@destroy')->name('destroy');
});


Route::group(['prefix' => 'locations'], function () {
    Route::get('', 'LocationController@index');
    Route::get('create', 'LocationController@create');
    Route::get('{location}', 'LocationController@show');
    Route::post('store', 'LocationController@store');
    Route::get('{location}/edit', 'LocationController@edit');
    Route::put('{location}', 'LocationController@update');
});


Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
    Route::get('', 'OrderController@index');
    Route::get('create', 'OrderController@create')->name('create');
    Route::get('{order}', 'OrderController@show');
    Route::post('store', 'OrderController@store')->name('store');;
    Route::get('{order}/edit', 'OrderController@edit')->name('edit');
    Route::put('{order}', 'OrderController@update')->name('update');
    Route::get('{order}/delete', 'OrderController@destroy')->name('destroy');
    Route::get('{order}/downloadPDF', 'OrderController@downloadPDF')->name('downloadPDF');
});


Route::group(['prefix' => 'products'], function () {
    Route::get('', 'ProductController@index');
    Route::get('create', 'ProductController@create');
    Route::get('{product}', 'ProductController@show');
    Route::post('store', 'ProductController@store');
    Route::get('{product}/edit', 'ProductController@edit');
    Route::put('{product}', 'ProductController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
