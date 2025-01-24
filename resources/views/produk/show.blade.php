<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $produk->nama }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
  <header class="container mt-5">
    <h1>{{ $produk->nama }}</h1>
    <img src="{{ asset(str_replace('public/', 'storage/', $produk->gambar)) }}" class="card-img-top" alt="{{ $produk->nama }}">
  </header>
  <main class="container">
    <h3 class="mt-3">Harga: Rp {{ number_format($produk->harga, 0, ',', '.') }}</h3>
    <p class="mt-3">{{ $produk->deskripsi }}</p>
  </main>
  <footer class="container">
    <a href="/produk" class="btn btn-primary">Kembali</a>
  </footer>
</body>
</html>