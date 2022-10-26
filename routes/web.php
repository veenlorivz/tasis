<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\PelanggaranController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', DashController::class . '@index')->name('dashboard');
    Route::prefix('absen')->group(function () {
        Route::get('/X', AbsenController::class . '@sepuluh')->name('absen.x');
        Route::get('/XI', AbsenController::class . '@sebelas')->name('absen.xi');
        Route::get('/XII', AbsenController::class . '@duabelas')->name('absen.xii');
    });
    Route::prefix('pelanggaran')->group(function () {
        Route::get('/X', PelanggaranController::class . '@sepuluh')->name('pelanggar.x');
        Route::get('/XI', PelanggaranController::class . '@sebelas')->name('pelanggar.xi');
        Route::get('/XII', PelanggaranController::class . '@duabelas')->name('pelanggar.xii');
    });
});