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

/** @var NavigationItem $navigationItem */
foreach (NavigationItem::all() as $navigationItem)
{
    Route::get($navigationItem->url, $navigationItem->action)->name($navigationItem->route_name);
}

Route::group(['prefix' => 'admin', 'as' => 'admin::', 'namespace' => 'Admin'], static function () {
    Route::middleware('auth')->group(static function () {
        // All routes inside this group require a signed in user!
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/treatments', 'TreatmentController@index')->name('treatments');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
