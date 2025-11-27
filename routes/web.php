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
Route::get('/tanah', [TanahController::class, 'index'])->name('tanah.index');
Route::get('/tanah/create', [TanahController::class, 'create'])->name('tanah.create');
Route::post('/tanah', [TanahController::class, 'store'])->name('tanah.store');
Route::get('/tanah/{id}/edit', [TanahController::class, 'edit'])->name('tanah.edit');
Route::put('/tanah/{id}', [TanahController::class, 'update'])->name('tanah.update');
Route::delete('/tanah/{id}', [TanahController::class, 'destroy'])->name('tanah.destroy');

// Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
