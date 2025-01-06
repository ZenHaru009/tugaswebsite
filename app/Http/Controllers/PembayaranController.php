<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('pembayaran');
    }
    public function success()
    {
        return view('pembayaranberhasil');
    }
    public function store(Request $request)
   {
    // Validasi input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'alamat' => 'required|string',
        'metode_pembayaran' => 'required|string',
        'total_pembayaran' => 'required|numeric',
    ]);

    // Simpan data ke database atau proses lainnya
    // Contoh: Pembayaran::create($validated);

    // Redirect ke halaman sukses atau tampilkan pesan sukses
    return redirect()->route('pembayaran')->with('success', 'Pembayaran berhasil disubmit!');
    
    }

}
