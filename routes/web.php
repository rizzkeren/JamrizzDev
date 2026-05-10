<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rute untuk menampilkan halaman depan (Portofolio)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk memproses Form Kontak
Route::post('/kirim-pesan', function (Request $request) {
    // 1. Validasi Keamanan (Memastikan data diisi dengan benar)
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subjek' => 'required|string|max:255',
        'pesan' => 'required|string',
    ]);

    // Di sinilah nanti kode untuk menyimpan data ke Database (MySQL)
    // atau mengirim notifikasi langsung ke Telegram/Email kamu diletakkan.

    // 2. Kembalikan user ke halaman depan dengan membawa "Pesan Sukses"
    return back()->with('success', 'Terima kasih, ' . $request->nama . '! Pesan Anda telah berhasil dikirim.');
});