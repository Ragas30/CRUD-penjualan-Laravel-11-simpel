<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Produk\ProdukController;
use App\Http\Controllers\dashboard\HomeController;

route::resource('register', registerController::class);
route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');

route::resource('produk', ProdukController::class)->middleware(AuthMiddleware::class);
route::get('login', [loginController::class, 'index'])->name('login');
