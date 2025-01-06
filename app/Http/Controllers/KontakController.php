<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Metode untuk menampilkan halaman kontak
    public function index()
    {
        return view('kontak');
    }
}
