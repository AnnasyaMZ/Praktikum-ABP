<?php

use Illuminate\Support\Facades\Route; // Tambahkan ini jika belum ada
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

// 1. Tampilkan halaman login (Pastikan file bernama resources/views/login.blade.php)
Route::get('/', function () {
    return view('login'); 
});

// 2. Proses Auth (Hapus baris Route::view('/', 'welcome') yang bikin error tadi)
Route::post('/auth', [SiteController::class, 'auth'])->name('auth');

// 3. Resource Controller untuk Produk
Route::resource('products', ProductController::class);

// Note: Baris di bawah ini sebenarnya sudah dicover oleh Route::resource di atas, 
// tapi tidak apa-apa jika ingin ditulis spesifik.
Route::get('/products', [ProductController::class, 'index']);