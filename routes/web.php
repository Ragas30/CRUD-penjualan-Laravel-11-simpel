<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Produk\ProdukController;
use App\Http\Controllers\dashboard\HomeController;


route::get('/', [HomeController::class, 'index'])->name('home');

route::resource('produk', ProdukController::class)->middleware(AuthMiddleware::class);
route::get('login', [authController::class, 'loginPage'])->name('login');
route::get('register', [authController::class, 'registerPage'])->name('register');
route::post('register', [authController::class, "register"]);
route::post('login', [authController::class, 'login']);
