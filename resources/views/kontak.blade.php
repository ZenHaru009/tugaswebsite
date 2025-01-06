<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        /* Global Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 700px;
            background: white;
            padding: 30px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
        }

        .list-group-item {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            font-size: 16px;
            color: #333;
        }

        .list-group-item a {
            color: #007bff;
            text-decoration: none;
        }

        .list-group-item a:hover {
            text-decoration: underline;
        }

        .btn-primary {
            display: block;
            margin: auto;
            width: fit-content;
            padding: 10px 20px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }

        /* Emoji Style */
        .emoji {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kontak Kami</h1>
        <p class="text-center">Hubungi kami melalui kontak berikut:</p>
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <strong>WhatsApp:</strong> 
                <a href="https://wa.me/6282248210607" target="_blank">0822-4821-0607</a>, 
                <a href="https://wa.me/6281362067223" target="_blank">0813-6206-7223</a>
            </li>
            <li class="list-group-item">
                <strong>Open Store:</strong> 10.00 - 19.00 WIT
            </li>
        </ul>
        <p class="text-center">
            Kami akan melayani Anda dengan senang hati 
            <span class="emoji">😊</span>
        </p>
        <button class="btn btn-primary back-button" onclick="history.back()">KEMBALI</button>
    </div>
    <div class="footer">
        &copy; 2024 Kontak Kami. Semua Hak Dilindungi.
    </div>
</body>
</html>
