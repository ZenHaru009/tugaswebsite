<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    // Tampilkan semua produk dengan pagination
    public function index()
    {
        // Ambil semua produk dengan pagination, menampilkan 10 produk per halaman
        $produks = Produk::paginate(10);

        // Kirim data ke view
        return view('produk', compact('produks'));
    }

    // Tampilkan produk untuk admin dengan pagination
    public function adminIndex()
    {
        // Ambil semua data produk dengan pagination
        $produks = Produk::paginate(10);

        // Kirim data produk ke view admin
        return view('admintoko', compact('produks'));
    }

    // Tampilkan detail produk
    public function show(Produk $produk)
    {
        // Laravel sudah mengikat model Produk, tidak perlu lagi findOrFail
        return view('produk.show', compact('produk'));
    }

    // Hapus produk
    public function destroy(Produk $produk)
    {
        // Periksa apakah produk memiliki gambar dan file ada
        if ($produk->gambar && Storage::exists('public/' . $produk->gambar)) {
            // Hapus gambar menggunakan Laravel Storage
            Storage::delete('public/' . $produk->gambar);
        }

        // Hapus produk dari database
        $produk->delete();

        // Redirect ke halaman admin produk dengan pesan sukses
        return redirect()->route('admin.toko')->with('success', 'Produk berhasil dihapus!');
    }
}
