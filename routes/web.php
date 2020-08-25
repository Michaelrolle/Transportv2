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




Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('{order}/downloadPDF', 'OrderController@downloadPDF')->name('downloadPDF');
    Route::resources([
        'clients' => 'ClientController',
        'drivers' => 'DriverController',
        'locations' => 'LocationController',
        'orders' => 'OrderController',
        'products' => 'ProductController',
    ]);
});



Auth::routes();
