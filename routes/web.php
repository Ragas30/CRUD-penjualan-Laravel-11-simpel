<?php

use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\Produk\ProdukController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');

route::resource('produk', ProdukController::class)->middleware(AuthMiddleware::class);
