<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\ProfilController; // Tambahkan controller untuk halaman profil
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AdminTokoController;
use Illuminate\Support\Facades\Route;

// Rute untuk pengguna yang belum login
Route::middleware(['guest'])->group(function() {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

// Redirect ke halaman admin
Route::get('/home', function() {
    return redirect('/admin');
});

Route::get('/lihat-harga', function () {
    return view('lihat_harga'); // File resources/views/lihat_harga.blade.php
});

Route::get('/lihat-selengkapnya', function () {
    return view('lihat_selengkapnya'); // File resources/views/lihat_selengkapnya.blade.php
});

Route::get('/batik-maluku', function () {
    return view('batik_maluku'); // File: resources/views/batik_maluku.blade.php
});

Route::get('/makanan-maluku', function () {
    return view('makanan_maluku'); // File: resources/views/makanan_maluku.blade.php
});

Route::get('/souvenir-maluku', function () {
    return view('souvenir_maluku'); // File: resources/views/souvenir_maluku.blade.php
});

Route::get('/cart', [CartController::class, 'index'])->name('cart'); // Menampilkan halaman keranjang
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add'); // Menambahkan produk
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update'); // Mengubah jumlah produk
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove'); // Menghapus produk

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::post('/submit-pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/berhasil', [PembayaranController::class, 'success'])->name('pembayaran.success');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


// Rute untuk pengguna yang sudah login
Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('userAkses:operator');
    Route::get('/admin/keuangan', [AdminController::class, 'keuangan'])->middleware('userAkses:keuangan');
    Route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('userAkses:marketing');
    
    // Rute ke halaman profil
    Route::get('/profil', [ProfilController::class, 'index']); // Tambahkan rute ini
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');


    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/lihat-harga', [ProdukController::class, 'lihatHarga']);
    Route::get('/lihat-selengkapnya', [ProdukController::class, 'lihatSelengkapnya']);

    // Rute logout
    Route::get('/logout', [SesiController::class, 'logout']);

    Route::get('/admin-toko', [AdminTokoController::class, 'index'])->name('admin-toko');
    Route::get('/admin-toko', [ProdukController::class, 'adminIndex'])->name('admin.toko');
    Route::post('/admin-toko/tambah-produk', [AdminTokoController::class, 'store'])->name('admin-toko.store');
    Route::get('/produk/{produk}', [ProdukController::class, 'show'])->name('produk.show');
    Route::delete('/admin-toko/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');


});
