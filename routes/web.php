<?php

use App\Models\NavigationItem;
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

/** @var NavigationItem $navigationItem */
foreach (NavigationItem::all() as $navigationItem)
{
    Route::get($navigationItem->url, $navigationItem->action)->name($navigationItem->route_name);
}
