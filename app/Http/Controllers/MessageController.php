<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Routing\Controller;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Data (Satpam Pengecek)
        $validatedData = $request->validate([
            'name'    => 'required|min:3|max:255',
            'email'   => 'required|email',
            'subject' => 'required|min:5|max:255',
            'message' => 'required|min:10',
        ], [
            // Kustomisasi pesan error agar lebih ramah
            'name.required'    => 'Nama wajib diisi ya.',
            'name.min'         => 'Nama minimal 3 huruf.',
            'email.required'   => 'Email tidak boleh kosong.',
            'email.email'      => 'Format email sepertinya kurang tepat.',
            'subject.required' => 'Subjek wajib diisi.',
            'message.required' => 'Pesan tidak boleh kosong.',
            'message.min'      => 'Pesan terlalu singkat, minimal 10 karakter.',
        ]);

        // 2. Simpan ke database JIKA lolos validasi
        Message::create($validatedData);

        // 3. Kembalikan ke halaman depan dengan pesan sukses
        return redirect('/#contact')->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim ke database saya.');
    }
}