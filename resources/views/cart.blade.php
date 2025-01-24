<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #555;
        }

        /* Main Content Styling */
        .container h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            background: -webkit-linear-gradient(45deg, #007bff, #0056b3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            margin-bottom: 30px;
        }

        .alert {
            margin-bottom: 20px;
        }

        table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td {
            background-color: #f8f9fa;
        }

        .form-control {
            display: inline-block;
            width: 80px;
        }

        .btn-primary, .btn-danger {
            margin-top: 5px;
        }

        /* Button Styling */
        .btn-primary, .btn-link {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            padding: 8px 20px;
            text-align: center;
            text-decoration: none;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
        }

        .btn-primary:hover, .btn-link:hover {
            background: #0056b3;
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .btn-danger {
            background: linear-gradient(45deg, #dc3545, #c82333);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-danger:hover {
            background: #c82333;
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }


    </style>
</head>
<body>
    

    <div class="container mt-5">
        <h1>Keranjang Belanja</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(empty($cart))
            <p>Keranjang Anda kosong.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cart as $id => $item)
                        @php $subtotal = $item['price'] * $item['quantity']; @endphp
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.update') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control d-inline">
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                </form>
                            </td>
                            <td>Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.remove') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @php $total += $subtotal; @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th colspan="2">Rp {{ number_format($total, 0, ',', '.') }}</th>
                    </tr>
                </tfoot>
            </table>
        @endif

        <!-- Tombol Bayar -->
        @if(!empty($cart) && $total > 0)
            <div class="text-center mt-4">
                <a href="{{ route('pembayaran') }}" class="btn btn-success">Bayar</a>
            </div>
        @endif

        <!-- Button Lihat Produk -->
        <div class="text-center mt-4">
            <a href="/produk" class="btn btn-primary">LIHAT PRODUK</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
