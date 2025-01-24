<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* Navbar Styling */
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
  border-radius: 20px; /* Membuat sudut card lebih besar */
  
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  margin-bottom: 40px; /* Memberikan jarak antar card */
  width: 1130px; /* Memperbesar lebar card */
  height: 1000px; /* Memperbesar tinggi card */
  
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
      <a class="navbar-brand" href="#">PROFIL TOKO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button class="btn btn-link nav-link" onclick="history.back()">KEMBALI</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <div class="container mt-5">
    <h1 class="text-center mb-4">Tentang Toko</h1>
    <div class="row">
      <!-- Profil 1 -->
      <div class="col-md-3">
        <div class="card">
          <img src="{{ asset('storage/images/banner.jpg') }}" class="card-img-top" alt="Faqih Fikrulsyah Harun">
          <div class="card-body text-center">
            <h5 class="card-title">The Ambon Manise Shop</h5>
            <p class="card-text">The Ambon Manise Shop merupakan salah satu pusat oleholeh khas Maluku yang terletak di Kota Ambon. 
        Toko ini dikenal sebagai tempat yang menyediakan berbagai produk yang mencerminkan budaya dan kekayaan alam Maluku.
        Mengunjungi Maluku tidak lengkap tanpa membawa pulang oleh-oleh, sehingga keberadaan toko ini sangat penting bagi 
        wisatawan yang ingin membawa pulang kenangan dari daerah Maluku.
        Toko Oleh oleh khas maluku ini menawarkan beragam produk yang berkualitas,mulai dari Pakaian,Batik maluku,
        Minyak kayu putih,makanan dll dan menjadikannya pilihan utama bagi pengunjung.
        Toko Oleh oleh khas maluku ini menawarkan beragam produk yang berkualitas,mulai dari Pakaian,Batik maluku,
        Minyak kayu putih,makanan dll dan menjadikannya pilihan utama bagi pengunjung.</p>
        <P>Lokasi Toko oleh-oleh khas maluku the ambon manise shop di Jl. 
          Cendrawasih No 63 A - Soya Kecil, Kelurahan Rijali, Ambon, 
          The Ambon Manise Shop mudah diakses oleh wisatawan maupun penduduk lokal.
          <P>
          </div>
        </div>
      </div>

      

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
