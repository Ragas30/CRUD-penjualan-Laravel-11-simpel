<?php

use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\Produk\ProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('/', function () {
//     return view('produk.index');
// });

route::get('/', [HomeController::class, 'index'])->name('home');
// route::get('/tampilData', [ProdukController::class, 'tampil'])->name('tampilData');


route::resource('produk', ProdukController::class);
route::get('/tampilData', [ProdukController::class, 'index'])->name(name: 'tampilData');
