<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Data contoh untuk halaman profil
        $users = [
            ['nama' => 'Faqih Fikrulsyah Harun', 'nim' => '220102071', 'foto' => 'faqih.jpg'],
            ['nama' => 'Jane Smith', 'nim' => '987654321', 'foto' => 'jane.jpg'],
            ['nama' => 'Michael Brown', 'nim' => '123987456', 'foto' => 'michael.jpg'],
            ['nama' => 'Emily White', 'nim' => '456321789', 'foto' => 'emily.jpg'],
        ];

        return view('profil', ['users' => $users]); // Kirim data ke view
    }
}
