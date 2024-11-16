<?php

use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\Produk\ProdukController;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'index'])->name('home');

route::resource('produk', ProdukController::class);
route::get('/tampilData', [ProdukController::class, 'index'])->name(name: 'tampilData');
Route::get('produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
// route::post('updateData', [ProdukController::class, 'update'])->name(name: 'updateData');
