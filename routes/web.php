<?php

use App\Http\Controllers\administratorController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\laporanPelangganController;
use App\Http\Controllers\laporanTeknisiController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [loginController::class, 'index']);

Route::post('/login', [loginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/dashboard', [dashboard::class, 'index'])->middleware('auth');

// Route Administrator mengatur segala hal 
Route::group(['middleware' => ['auth','CekLevel:administrator']] , function() {
    
    Route::get('/tambahUser',[administratorController::class, 'index']);
    Route::get('/tambah_user',[administratorController::class, 'create']);

    Route::post('/laporan', [laporanPelangganController::class, 'store']);
    Route::get('/laporan', [laporanPelangganController::class, 'index']);
    Route::get('/tambah_laporan', [laporanPelangganController::class, 'create'])->middleware('auth');
    Route::get('/teknisiLaporan', [laporanTeknisiController::class, 'index']);


});

// Route admin - input cuman mengakses laporan teknisi dan pengajuan 
Route::group(['middleware' => ['auth','CekLevel:admin,administrator']] , function() {
    Route::get('/teknisiLaporan', [laporanTeknisiController::class, 'index']);
});

// Route teknisi cuman mengakses laporan teknisi
Route::group(['middleware' => ['auth','CekLevel:teknisi,admin,administrator']] , function() {
    Route::get('/teknisiLaporan', [laporanTeknisiController::class, 'index']);
});



// Route::post('/logout', [dashboard::class, 'logout']);

Route::resource('/logout', dashboard::class);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

