<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Harga</title>
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
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
          <div class="card product-card">
            <img src="{{ asset('storage/images/minyak kayu putih.jpg') }}" class="card-img-top" alt="Minyak Kayu Putih">
            <div class="card-body">
              <h5 class="card-title">Minyak Kayu Putih Beta</h5>
    <h1 class="text-center">Harga Minyak Kayu Putih Beta</h1>
    <p class="text-center">Harga: Rp 110.000</p>
      <p>
        Minyak Kayu Putih Beta Asli Pulau Buru, Untuk informasi lebih lanjut, kunjungi 
        <a href="http://www.theambonmaniseshop.com/2015/09/post-2.html" target="_blank">website resmi Minyak Kayu Putih Beta</a>.
      </p>
    <div class="text-center">
      <button class="btn btn-primary" onclick="history.back()">Kembali</button>
    </div>
  </div>
</body>

</html>
