<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #eaf7ff;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #007bff;
    }

    .navbar-brand {
      font-weight: bold;
    }

    .product-card {
      border: none;
      background: transparent;
    }

    .product-card img {
      max-height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }

    .category-card img {
      border-radius: 8px;
      max-height: 120px;
      object-fit: cover;
    }

    .main-title {
      font-size: 3rem;
      font-weight: bold;
      color: #0056b3;
    }

    .category-text {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .category-link {
      font-size: 0.9rem;
      color: #007bff;
      text-decoration: none;
    }

    .category-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/produk">The Ambon Manise Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <button class="btn btn-link nav-link" onclick="history.back()">KEMBALI</button>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cart') }}">Keranjang Belanja</a>
          </li>          
          <li class="nav-item"><a class="nav-link" href="{{ route('pembayaran') }}">Pembayaran</a></li>
         <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
      </ul>
    </div>
  </div>
</nav>

  

  <!-- Konten Utama -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h1 class="/produk">Oleh-oleh khas Maluku</h1>
      </div>
      <div class="col-md-4 text-end">
        <img src="{{ asset('storage/images/logo.jpeg') }}" alt="Logo" style="max-height: 100px;">
      </div>
    </div>

    <!-- Produk Unggulan -->
    <div class="mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card product-card">
            <img src="{{ asset('storage/images/minyak kayu putih.jpg') }}" class="card-img-top" alt="Minyak Kayu Putih">
            <div class="card-body">
              <h5 class="card-title">Minyak Kayu Putih Beta</h5>
              <p class="card-text">⭐⭐⭐⭐⭐</p>
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Minyak Kayu Putih Beta">
                <input type="hidden" name="product_price" value="110000">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-success btn-sm">Tambah ke Keranjang</button>
              </form>
              <a href="/lihat-selengkapnya" class="btn btn-info btn-sm">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- Kategori -->
    <div class="mt-5">
      <div class="row">
        <div class="col-md-3">
          <div class="card category-card">
            <img src="{{ asset('storage/images/batik maluku.jpeg') }}" class="card-img-top" alt="Batik Maluku">
            <div class="card-body text-center">
              <p class="category-text">Batik Maluku Motif Pala</p>
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Batik Maluku Motif Pala">
                <input type="hidden" name="product_price" value="123000">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-success btn-sm">Tambah ke Keranjang</button>
              </form>
              <a href="/batik-maluku" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card category-card">
            <img src="{{ asset('storage/images/makanan maluku.jpeg') }}" class="card-img-top" alt="Makanan Maluku">
            <div class="card-body text-center">
              <p class="category-text">Makanan Khas Maluku</p>
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Makanan Khas Maluku">
                <input type="hidden" name="product_price" value="52000">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-success btn-sm">Tambah ke Keranjang</button>
              </form>
              <a href="/makanan-maluku" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card category-card">
            <img src="{{ asset('storage/images/souvenir maluku.jpeg') }}" class="card-img-top" alt="Souvenir Maluku">
            <div class="card-body text-center">
              <p class="category-text">Souvenir Maluku</p>
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Souvenir Maluku">
                <input type="hidden" name="product_price" value="63000">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-success btn-sm">Tambah ke Keranjang</button>
              </form>
              <a href="/souvenir-maluku" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tombol Lihat Produk Lainnya -->
    <div class="text-center mt-5">
      <a href="http://www.theambonmaniseshop.com/2015/09/post-2.html" class="btn btn-primary">Lihat produk lainnya <i class="bi bi-arrow-down"></i></a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
