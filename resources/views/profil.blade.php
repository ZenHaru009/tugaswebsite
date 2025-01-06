<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;600&display=swap" rel="stylesheet">
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
      <a class="navbar-brand" href="#">SI5C</a>
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
    <h1 class="text-center mb-4">Profil Mahasiswa</h1>
    <div class="row">
      <!-- Profil 1 -->
      <div class="col-md-3">
        <div class="card">
          <img src="{{ asset('storage/images/faqih1.jpg') }}" class="card-img-top" alt="Faqih Fikrulsyah Harun">
          <div class="card-body text-center">
            <h5 class="card-title">Faqih Fikrulsyah Harun</h5>
            <p class="card-text">NIM: 220102071</p>
          </div>
        </div>
      </div>

      <!-- Profil 2 -->
      <div class="col-md-3">
        <div class="card">
          <img src="{{ asset('storage/images/user2.jpg') }}" class="card-img-top" alt="Sion Gunawan">
          <div class="card-body text-center">
            <h5 class="card-title">Sion Gunawan</h5>
            <p class="card-text">NIM: 220102100</p>
          </div>
        </div>
      </div>

      <!-- Profil 3 -->
      <div class="col-md-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Foto Mahasiswa 3">
          <div class="card-body text-center">
            <h5 class="card-title">Purnama A Marasabassy</h5>
            <p class="card-text">NIM: 34567890</p>
          </div>
        </div>
      </div>

      <!-- Profil 4 -->
      <div class="col-md-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Foto Mahasiswa 4">
          <div class="card-body text-center">
            <h5 class="card-title">Dian Sumantri</h5>
            <p class="card-text">NIM: 45678901</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
