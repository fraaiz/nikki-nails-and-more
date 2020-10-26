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

    Route::as('dashboard.')->group(function () {
        Route::get('/treatments', [\App\Http\Controllers\Dashboard\TreatmentController::class, 'index'])->name('treatments');
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
