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
    Route::get('/barang/create', [BarangController::class,'create'])->name('barang-create');
    Route::post('/barang/store', [BarangController::class,'store'])->name('barang-store');
    Route::get('/barang/show/{id}', [BarangController::class,'show'])->name('barang-show');
    Route::get('/barang/edit/{id}', [BarangController::class,'edit'])->name('barang-edit');
    Route::patch('/barang/update/{id}', [BarangController::class,'update'])->name('barang-update');
    Route::delete('/barang/delete/{id}', [BarangController::class,'destroy'])->name('barang-delete');


    /* Satuan */
    Route::get('/satuan', [SatuanController::class,'index'])->name('satuan');
    Route::get('/satuan/create', [SatuanController::class,'create'])->name('satuan-create');
    Route::post('/satuan/store', [SatuanController::class,'store'])->name('satuan-store');
    Route::get('/satuan/show/{id}', [SatuanController::class,'show'])->name('satuan-show');
    Route::get('/satuan/edit/{id}', [SatuanController::class,'edit'])->name('satuan-edit');
    Route::patch('/satuan/update/{id}', [SatuanController::class,'update'])->name('satuan-update');
    Route::delete('/satuan/delete/{id}', [SatuanController::class,'destroy'])->name('satuan-delete');


    /* Klasifikasi */
    Route::get('/klasifikasi', [KlasifikasiController::class,'index'])->name('klasifikasi');
    Route::get('/klasifikasi/create', [KlasifikasiController::class,'create'])->name('klasifikasi-create');
    Route::post('/klasifikasi/store', [KlasifikasiController::class,'store'])->name('klasifikasi-store');
    Route::get('/klasifikasi/show/{id}', [KlasifikasiController::class,'show'])->name('klasifikasi-show');
    Route::get('/klasifikasi/edit/{id}', [KlasifikasiController::class,'edit'])->name('klasifikasi-edit');
    Route::patch('/klasifikasi/update/{id}', [KlasifikasiController::class,'update'])->name('klasifikasi-update');
    Route::delete('/klasifikasi/delete/{id}', [KlasifikasiController::class,'destroy'])->name('klasifikasi-delete');


    /* Rak */
    Route::get('/rak', [RakController::class,'index'])->name('rak');
    Route::get('/rak/create', [RakController::class,'create'])->name('rak-create');
    Route::post('/rak/store', [RakController::class,'store'])->name('rak-store');
    Route::get('/rak/show/{id}', [RakController::class,'show'])->name('rak-show');
    Route::get('/rak/edit/{id}', [RakController::class,'edit'])->name('rak-edit');
    Route::patch('/rak/update/{id}', [RakController::class,'update'])->name('rak-update');
    Route::delete('/rak/delete/{id}', [RakController::class,'destroy'])->name('rak-delete');


    /* Gudang */
    Route::get('/gudang', [GudangController::class,'index'])->name('gudang');
    Route::get('/gudang/create', [GudangController::class,'create'])->name('gudang-create');
    Route::post('/gudang/store', [GudangController::class,'store'])->name('gudang-store');
    Route::get('/gudang/show/{id}', [GudangController::class,'show'])->name('gudang-show');
    Route::get('/gudang/edit/{id}', [GudangController::class,'edit'])->name('gudang-edit');
    Route::patch('/gudang/update/{id}', [GudangController::class,'update'])->name('gudang-update');
    Route::delete('/gudang/delete/{id}', [GudangController::class,'destroy'])->name('gudang-delete');


    /* Barang Masuk */
    Route::get('/barang-masuk', [BarangMasukController::class,'index'])->name('barang-masuk');
    Route::get('/barang-masuk/create', [BarangMasukController::class,'create'])->name('barang-masuk-create');
    Route::post('/barang-masuk/store', [BarangMasukController::class,'store'])->name('barang-masuk-store');
    Route::get('/barang-masuk/show/{id}', [BarangMasukController::class, 'show'])->name('barang-masuk-show');


    /* Barang Keluar */
    Route::get('/barang-keluar', [BarangKeluarController::class,'index'])->name('barang-keluar');
    Route::get('/barang-keluar/create', [BarangKeluarController::class,'create'])->name('barang-keluar-create');
    Route::post('/barang-keluar/store', [BarangKeluarController::class,'store'])->name('barang-keluar-store');
    Route::get('/barang-keluar/show/{id}', [BarangKeluarController::class, 'show'])->name('barang-keluar-show');


    /* History */
    Route::get('/history', [HistoryController::class,'index'])->name('history');

    

    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
});
