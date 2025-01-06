<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Ambil data keranjang dari session
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $quantity = $request->input('quantity', 1);

        // Ambil keranjang dari session, atau buat keranjang baru
        $cart = session()->get('cart', []);

        // Tambahkan produk ke keranjang
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => $quantity,
            ];
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function update(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Keranjang diperbarui!');
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');

        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Produk dihapus dari keranjang!');
    }
}
