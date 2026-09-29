<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'home'])->name('home');
Route::get('/katalog', [ProdukController::class, 'index'])->name('katalog');
Route::get('/katalog/{id}', [ProdukController::class, 'show'])->name('produk.detail');

// Route Admin (CRUD)
Route::get('/admin', [ProdukController::class, 'admin'])->name('admin');
Route::post('/admin/store', [ProdukController::class, 'store'])->name('produk.store');
Route::put('/admin/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/admin/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');