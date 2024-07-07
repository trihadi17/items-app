<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SatuanController;

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

Route::group(['middleware' => 'guest'], function (){
    Route::get('/', [AuthController::class,'index'])->name('login');
    Route::post('/', [AuthController::class,'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function (){
    /* Dashboard */
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    /* Barang */
    Route::get('/barang', [BarangController::class,'index'])->name('barang');


    /* Satuan */
    Route::get('/satuan', [SatuanController::class,'index'])->name('satuan');
    Route::get('/satuan/create', [SatuanController::class,'create'])->name('satuan-create');
    Route::post('/satuan/store', [SatuanController::class,'store'])->name('satuan-store');
    Route::get('/satuan/show/{id}', [SatuanController::class,'show'])->name('satuan-show');
    Route::get('/satuan/edit/{id}', [SatuanController::class,'edit'])->name('satuan-edit');
    Route::post('/satuan/update/{id}', [SatuanController::class,'update'])->name('satuan-update');
    Route::delete('/satuan/delete/{id}', [SatuanController::class,'destroy'])->name('satuan-delete');


    /* Klasifikasi */
    Route::get('/klasifikasi', [KlasifikasiController::class,'index'])->name('klasifikasi');


    /* Rak */
    Route::get('/rak', [RakController::class,'index'])->name('rak');


    /* Gudang */
    Route::get('/gudang', [GudangController::class,'index'])->name('gudang');


    /* Barang Masuk */
    Route::get('/barang-masuk', [BarangMasukController::class,'index'])->name('barang-masuk');


    /* Barang Keluar */
    Route::get('/barang-keluar', [BarangKeluarController::class,'index'])->name('barang-keluar');


    /* History */
    Route::get('/history', [HistoryController::class,'index'])->name('history');

    

    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
});
