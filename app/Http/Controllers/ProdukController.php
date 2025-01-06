<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk'); // Pastikan file produk.blade.php ada di resources/views
    }
    public function lihatHarga()
    {
        return view('lihat_harga');
    }
    
    public function lihatSelengkapnya()
    {
        return view('lihat_selengkapnya');
    }
    
    
}
