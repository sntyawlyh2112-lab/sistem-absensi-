<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| ROOT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| AUTH (LOGIN / LOGOUT)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| PROTECTED AREA (HARUS LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    | DASHBOARD
    */
    Route::get('/dashboard', [DashboardController::class, 'index']);

    /*
    | ABSENSI
    */
    Route::get('/absensi', [AbsensiController::class, 'index']);
    Route::get('/absensi/create', [AbsensiController::class, 'create']);
    Route::post('/absensi', [AbsensiController::class, 'store']);
    Route::get('/absensi/{id}/edit', [AbsensiController::class, 'edit']);
    Route::put('/absensi/{id}', [AbsensiController::class, 'update']);
    Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy']);
    Route::get('/absensi-pdf', [AbsensiController::class, 'exportPdf']);

    /*
    | MAHASISWA
    */
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

    /*
    | LOGOUT (biar aman di dalam sistem)
    */
    Route::get('/logout', [AuthController::class, 'logout']);

});