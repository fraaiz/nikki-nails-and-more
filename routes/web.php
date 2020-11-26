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

/*
 * Dashboard routes
 */
Route::middleware(['auth:sanctum', 'verified'])->prefix('/dashboard')->group(function () {
    Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');

    Route::as('dashboard.treatments.')->prefix('/treatments')->group(function () {
        Route::get('/', \App\Http\Controllers\Dashboard\Treatments\Index::class)->name('index');
        Route::get('/create', \App\Http\Controllers\Dashboard\Treatments\Create::class)->name('create');
        Route::post('/create', \App\Http\Controllers\Dashboard\Treatments\Store::class)->name('store');
        Route::get('/edit/{treatment}', \App\Http\Controllers\Dashboard\Treatments\Edit::class)->name('edit');
        Route::put('/edit/{treatment}', \App\Http\Controllers\Dashboard\Treatments\Update::class)->name('update');
        Route::get('/destroy/{treatment}', \App\Http\Controllers\Dashboard\Treatments\Destroy::class)->name('destroy');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*
 * Website routes
 */
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/behandelingen', [\App\Http\Controllers\TreatmentController::class, 'index'])->name('treatment.index');
Route::get('/behandelingen/{treatmentSlug}', [\App\Http\Controllers\TreatmentController::class, 'bySlug'])->name('treatment.bySlug');
Route::get('/prijslijst', [\App\Http\Controllers\PricelistController::class, 'index'])->name('pricelist');
Route::get('/reserveren', [\App\Http\Controllers\ReserveController::class, 'index'])->name('reserve');
Route::get('/overmij', [\App\Http\Controllers\AboutmeController::class, 'index'])->name('aboutme');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
