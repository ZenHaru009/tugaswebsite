<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak valid',
        'password.required' => 'Password wajib diisi',
    ]);

    // Cek apakah email ada di database
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        // Jika email tidak ditemukan, cek apakah password juga salah
        if (!User::where('password', bcrypt($request->password))->exists()) {
            return redirect()->back()->withErrors([
                'email_password' => 'Email dan password yang dimasukkan salah'
            ])->withInput();
        }

        // Jika hanya email yang salah
        return redirect()->back()->withErrors([
            'email' => 'Email tidak terdaftar'
        ])->withInput();
    }

    // Cek apakah password benar
    if (!Hash::check($request->password, $user->password)) {
        // Jika password salah
        return redirect()->back()->withErrors([
            'password' => 'Password yang dimasukkan salah'
        ])->withInput();
    }

    // Jika login berhasil
    Auth::login($user);

    // Menyimpan pesan sukses login ke session
    session()->flash('success', 'Login berhasil!');

    // Cek peran pengguna dan arahkan sesuai
    if ($user->role == 'operator') {
        return redirect('admin/operator');
    } elseif ($user->role == 'keuangan') {
        return redirect('admin/keuangan');
    } elseif ($user->role == 'marketing') {
        return redirect('admin/marketing');
    }
}

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
