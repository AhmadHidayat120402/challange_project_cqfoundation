<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProgramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);

Route::prefix('admin')->group(function () {

    Route::get('/', [BannerController::class, 'index']);
    ROute::post('/saveBanner', [BannerController::class, 'store']);
    Route::put('/banner/{id}', [BannerController::class, 'update']);
    Route::delete('/banner/{id}', [BannerController::class, 'destroy']);

    Route::get('/donasi', [DonasiController::class, 'index']);
    ROute::post('/saveDonasi', [DonasiController::class, 'store']);
    Route::put('/donasi/{id}', [DonasiController::class, 'update']);
    Route::delete('/donasi/{id}', [DonasiController::class, 'destroy']);

    Route::get('/kajian', [KajianController::class, 'index']);
    ROute::post('/saveKajian', [KajianController::class, 'store']);
    Route::put('/kajian/{id}', [KajianController::class, 'update']);
    Route::delete('/kajian/{id}', [KajianController::class, 'destroy']);

    Route::get('/program', [ProgramController::class, 'index']);
    ROute::post('/saveProgram', [ProgramController::class, 'store']);
    Route::put('/program/{id}', [ProgramController::class, 'update']);
    Route::delete('/program/{id}', [ProgramController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
