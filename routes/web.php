<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

// 1. Rute untuk menampilkan desain HTML kamu (Halaman Utama)
Route::get('/', function () {
    return view('welcome');
});

// 2. Rute untuk memproses data dari form kontak
Route::post('/kirim-pesan', [MessageController::class, 'store']);