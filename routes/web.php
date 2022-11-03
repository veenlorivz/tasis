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
    // Dashboard
    Route::get('/', DashController::class . '@index')->name('dashboard');
    // Data Absensi
    Route::prefix('absen')->group(function () {
        Route::get('/{kelas}', AbsenController::class . '@index')->name('absen');
        Route::get('/add/{siswa_id}', AbsenController::class . '@create')->name('create');
        Route::post('/store', AbsenController::class . '@store')->name('store');
        Route::get('/detail/{siswa_id}', AbsenController::class . '@show')->name('detail');
        Route::post('/delete/{absen_id}', AbsenController::class . '@destroy')->name('destroy');
    });
    // Data Pelanggaran
    Route::prefix('pelanggaran')->group(function () {
        Route::get('/{kelas}', PelanggaranController::class . '@index')->name('pelanggaran');
        Route::get('/add/{siswa_id}', PelanggaranController::class . '@create')->name('create');
        Route::post('/store', PelanggaranController::class . '@store')->name('store');
        Route::get('/detail/{siswa_id}', PelanggaranController::class . '@show')->name('detail');
        Route::post('/delete/{pelanggaran_id}', PelanggaranController::class . '@destroy')->name('destroy');
    });
});