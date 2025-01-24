<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
      background: linear-gradient(45deg, #007bff, #0056b3);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .navbar-brand {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      font-size: 1.5rem;
    }

    .navbar-nav .nav-link {
      color: #f8f9fa;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: #ffd700;
    }

    .btn-link {
      text-decoration: none;
      color: #f8f9fa;
    }

    .btn-link:hover {
      text-decoration: underline;
      color: #ff6347;
    }

    /* Main Content Styling */
    .container h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      background: -webkit-linear-gradient(45deg, #007bff, #0056b3);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Card Styling */
    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      border-radius: 15px 15px 0 0;
      object-fit: cover;
    }

    .card-title {
      font-family: 'Roboto', sans-serif;
      font-weight: 600;
      color: #333;
    }

    .card-text {
      font-family: 'Roboto', sans-serif;
      font-size: 0.9rem;
      color: #555;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .card {
        margin-bottom: 20px;
      }
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">The Ambon Manise Shop</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <button class="btn btn-link nav-link" onclick="history.back()">KEMBALI</button>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}">KERANJANG BELANJA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pembayaran') }}">PPEMBAYARAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">KONTAK KAMI</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mt-5">
        <h1 class="text-center">Oleh-oleh Khas Maluku</h1>
        <div class="row mt-5">
            @foreach ($produks as $produk)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset(str_replace('public/', 'storage/', $produk->gambar)) }}" class="card-img-top" alt="{{ $produk->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->nama }}</h5>
                        <p class="card-text">Harga: Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                        <p class="card-text">{{ $produk->deskripsi }}</p>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $produk->id }}">
                            <input type="hidden" name="product_name" value="{{ $produk->nama }}">
                            <input type="hidden" name="product_price" value="{{ $produk->harga }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-success btn-sm">Tambah ke Keranjang</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
