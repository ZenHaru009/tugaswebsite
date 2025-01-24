<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class AdminTokoController extends Controller
{
    public function index()
    {
        return view('admintoko');
    }

    public function store(Request $request)
{
    // Validasi inputan
    $request->validate([
        'nama_produk' => 'required|string|max:255',
        'harga_produk' => 'required|numeric',
        'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif',
        'deskripsi_produk' => 'required|string', // Menambahkan validasi untuk deskripsi
    ]);

    // Menyimpan produk
    $produk = new Produk();
    $produk->nama = $request->nama_produk;
    $produk->harga = $request->harga_produk;

    // Menyimpan gambar jika ada
    if ($request->hasFile('gambar_produk')) {
        $gambarPath = $request->file('gambar_produk')->store('public/images');
        $produk->gambar = $gambarPath;
    }

    // Menyimpan deskripsi produk
    $produk->deskripsi = $request->deskripsi_produk;

    // Simpan ke database
    $produk->save();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.toko')->with('success', 'Produk berhasil ditambahkan!');
}


}
