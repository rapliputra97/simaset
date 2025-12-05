<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Resource routes
Route::resource('bangunan', BangunanController::class);
Route::resource('tanah', TanahController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('ruangan', RuanganController::class);
Route::resource('barang', BarangController::class);
