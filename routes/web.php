<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\UserController;
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

// login
Route::get('/login', UserController::class . '@login')->name('login');
Route::post('/loginPost', UserController::class . '@loginPost');
Route::get('/logout', UserController::class . '@logout')->name('logout');

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', DashboardController::class . '@index')->name('dashboard');
    //  Data Siswa Detail
    Route::prefix('siswa')->group(function () {
        Route::get('/{kelas}', DetailController::class . '@index')->name('siswa');
        Route::get('/detail/{siswa_id}', DetailController::class . '@show')->name('detail');
    });
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