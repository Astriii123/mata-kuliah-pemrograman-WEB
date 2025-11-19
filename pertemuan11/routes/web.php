<?php

use App\Http\Controllers\EsTelerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GalleryController; // Pastikan ini ada
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', [EsTelerController::class, 'index'])->name('home');

// Halaman Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Halaman Galeri
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri'); // Pastikan ini GalleryController

// Halaman Keranjang
Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');

// API Routes untuk Cart
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/get-cart', [CartController::class, 'getCart'])->name('get.cart');
Route::post('/send-order', [CartController::class, 'sendOrder'])->name('send.order');
Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');