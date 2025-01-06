<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        /* Global Styling */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #555;
        }

        .form-control, .form-select {
            box-shadow: none;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Tombol "Kembali" -->
    <button class="btn btn-primary back-button" onclick="history.back()">KEMBALI</button>

    <div class="container mt-5">
        <h1 class="text-center">Form Pembayaran</h1>
        <form action="{{ route('pembayaran.success') }}" method="get">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="E-Wallet">E-Wallet</option>
                    <option value="COD">Cash on Delivery</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
                <input type="number" class="form-control" id="total_pembayaran" name="total_pembayaran" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Pembayaran</button>
        </form>
    </div>
</body>
</html>
