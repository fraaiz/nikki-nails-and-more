<?php

use App\Models\NavigationItem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// /** @var NavigationItem $navigationItem */
// foreach (NavigationItem::all() as $navigationItem)
// {
//     Route::get($navigationItem->url, $navigationItem->action)->name($navigationItem->route_name);
// }

Route::get('/', 'HomeController@view')->name('home');
Route::get('/treatments', 'TreatmentsController@view')->name('treatments');
Route::get('/pricelist', 'PriceListController@view')->name('pricelist');
Route::get('/reservation', 'ReservationController@view')->name('reservation');
Route::get('/aboutme', 'AboutMeController@view')->name('about');
Route::get('/testpage', 'TestPageController@view')->name('testpage');
Route::get('/contact', 'ContactController@view')->name('contact');
//Route::get('/treatments/{treatment}')
Route::get('/treatments/pedicure', 'PedicureController@view')->name('pedicure');
Route::get('/treatments/manicure', 'ManicureController@view')->name('manicure');
Route::get('/treatments/gelcolor', 'GelcolorController@view')->name('gelcolor');
Route::get('/treatments/gezicht', 'GezichtController@view')->name('gezicht');
Route::get('/treatments/lichaam', 'LichaamController@view')->name('lichaam');




Route::group(['prefix' => 'admin', 'as' => 'admin::', 'namespace' => 'Admin', 'middleware' => 'auth'], static function () {
        // All routes inside this group require a signed in user!
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/treatments', 'TreatmentController@index')->name('treatments');

        Route::get('/treatments/add', 'TreatmentController@add')->name('treatments.add');
        Route::post('/treatments/add', 'TreatmentController@store')->name('treatments.store');

        Route::get('/treatments/edit/{treatment}', 'TreatmentController@edit')->name('treatments.edit');
        Route::post('/treatments/edit/{treatment}', 'TreatmentController@update')->name('treatments.update');

//
        Route::get('/treatments/delete/{treatment}', 'TreatmentController@delete')->name('treatments.delete');

//

        Route::get('/form', static function (){return view('admin.form');})->name('form');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
