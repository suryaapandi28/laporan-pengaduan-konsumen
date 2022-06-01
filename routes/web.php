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
use App\Http\Controllers\PengaduanController;

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
    Route::get('/tambahUser/destroy{id}',[administratorController::class, 'destroy']);
    // Route::get('/tambahUser/edit{id}',[administratorController::class, 'edit']);
    // Route::get('/detail_user',[administratorController::class, 'show']);


    
    
    Route::post('/tambahUser',[administratorController::class, 'store']);
    Route::get('/tambah_user',[administratorController::class, 'create']);
    
    Route::get('/updating_users{id}', [administratorController::class, 'edit']);
    Route::put('/updating_user{id}/update', [administratorController::class, 'update']);
    
    // Route::get('users/{id}', function ($id) {
        
    // });
    // Route::post('/laporan', [laporanPelangganController::class, 'store']);
    // Route::get('/laporan', [laporanPelangganController::class, 'index']);
    Route::resource('laporan', laporanPelangganController::class);
    Route::get('/tambah_laporan', [laporanPelangganController::class, 'create'])->middleware('auth');
    // Route::put('/editstatus', [laporanPelangganController::class, 'create'])->middleware('auth');
    // Route::get('/teknisiLaporan', [laporanTeknisiController::class, 'index']);

    Route::get('/statusupdate{id}', [laporanPelangganController::class, 'edit']);
    Route::put('/statusupdate{id}/update', [laporanPelangganController::class, 'update']);

    Route::get('/statusupdate{id}', [laporanTeknisiController::class, 'edit']);
    Route::put('/statusupdate{id}/update', [laporanTeknisiController::class, 'update']);

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
Route::resource('pengaduan', PengaduanController::class);

