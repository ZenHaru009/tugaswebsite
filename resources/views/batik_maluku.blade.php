<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Batik Maluku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* Global Styling */
    body {
      font-family: 'Roboto', sans-serif;
      color: #555;
      background-color: #f9f9f9;
    }

    /* Main Content Styling */
    .container h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      background: -webkit-linear-gradient(45deg, #007bff, #0056b3);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-align: center;
      margin-bottom: 20px;
    }

    .container p {
      font-size: 1.1rem;
      margin-bottom: 20px;
      text-align: justify;
    }

    .container img {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      max-width: 100%;
      height: auto;
    }

    /* Button Styling */
    .btn-primary {
      background: linear-gradient(45deg, #007bff, #0056b3);
      border: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
      background: #0056b3;
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Positioning "Kembali" Button */
    .back-button {
      position: absolute;
      top: 20px;
      right: 20px;
      z-index: 1000;
    }

    .responsive-img {
    max-width: 50px;
    height: auto;
    }

    .custom-img {
    max-width: 40px;
    height: auto;
    border-radius: 10px; /* Opsional, untuk estetika */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Opsional */
    }
  </style>
</head>

<body>
  <!-- Button "Kembali" -->
  <button class="btn btn-primary back-button" onclick="history.back()">Kembali</button>

  <div class="container mt-5">
    <h1 class="text-center">Batik Maluku</h1>
    <p class="text-center">Harga: Rp 123.000</p>
    <p>Batik Maluku memiliki corak khas yang terinspirasi dari budaya lokal dan kekayaan alam Maluku.
        Untuk informasi lebih lanjut, kunjungi 
        <a href="http://www.theambonmaniseshop.com/2016/03/topi-maluku-merk-bastel.html" target="_blank">website resmi Batik Maluku</a>.
    </p>
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="1">
        <input type="hidden" name="product_name" value="Batik Maluku Motif Pala">
        <input type="hidden" name="product_price" value="123000">
        <input type="hidden" name="quantity" value="1">
        <button type="submit" class="btn btn-success btn-sm">Tambah ke Keranjang</button>
      </form>
    <img src="{{ asset('storage/images/batik maluku.jpeg') }}" alt="Batik Maluku" class="img-fluid w-50">
  </div>
</body>

</html>
