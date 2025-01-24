<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
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

    .container p {
      font-family: 'Roboto', sans-serif;
      font-size: 1rem;
      color: #555;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .container h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php">The Ambon Manise Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/profil">PROFIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">PRODUK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-toko">ADMIN TOKO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <div class="container mt-5 text-center">
    <h1>Selamat Datang di Toko Kami</h1>
    <p>Gunakan navigasi di atas untuk berpindah ke halaman lain.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
