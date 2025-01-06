<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 700px;
        }

        h1 {
            font-size: 2.5rem;
            color: #28a745; /* Bootstrap's text-success green */
            font-weight: 700;
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Pembayaran Berhasil!</h1>
        <p class="mt-3">Terima kasih telah melakukan pembayaran. Pesanan Anda sedang diproses dan akan segera dikirimkan.</p>
        <img src="{{ asset('storage/images/success.png') }}" alt="Pembayaran Berhasil" class="img-fluid mt-3" style="max-height: 300px;">
        <p class="mt-3">Jika Anda memiliki pertanyaan, silakan hubungi kami di <a href="https://wa.me/6282248210607" target="_blank">WhatsApp</a>.</p>
        <a href="/" class="btn btn-primary mt-4">Kembali ke Beranda</a>
    </div>
</body>
</html>
