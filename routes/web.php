<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('/dashboard')->as('dashboard::')->group(static function () {
    Route::get('/', \App\Http\Controllers\Dashboard\Index::class)->name('index');
    Route::prefix('/treatments')->as('treatments.')->group(static function () {
        Route::get('/', \App\Http\Controllers\Dashboard\Treatments\Index::class)->name('index');
        Route::get('/create', \App\Http\Controllers\Dashboard\Treatments\Create::class)->name('create');
        Route::get('/edit/{treatment}', \App\Http\Controllers\Dashboard\Treatments\Index::class)->name('edit');
    });
});
