<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/fasilitas', [PageController::class, 'facility'])->name('facility');
Route::get('/produk', [PageController::class, 'products'])->name('products');
Route::get('/kemitraan', [PageController::class, 'partnership'])->name('partnership');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
