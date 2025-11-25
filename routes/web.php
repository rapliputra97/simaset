<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);
Route::resource('tanah', TanahController::class);
Route::resource('bangunan', BangunanController::class);
Route::resource('ruangan', RuanganController::class);
Route::resource('barang', BarangController::class);

Route::get('/ruangan/{id}/cetak', [RuanganController::class, 'cetak'])
    ->name('ruangan.cetak');
