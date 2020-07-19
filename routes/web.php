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


Route::get('/', 'HomeController@view')->name('home');

Route::get('/pricelist', 'PriceListController@view')->name('pricelist');

Route::get('/treatments', 'TreatmentsController@view')->name('treatments');

// Route::get('/contact', 'ContactController@view');
