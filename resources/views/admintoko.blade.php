<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Toko</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/admin-toko">ADMIN TOKO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/produk">LIHAT PRODUK</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-link nav-link" onclick="history.back()">KEMBALI</button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="text-center">HALAMAN ADMIN TOKO</h1>
    <p class="text-center">Gunakan formulir di bawah untuk menambah produk baru.</p>

    <!-- Form Tambah Produk -->
    <div class="card mx-auto mt-4" style="max-width: 600px;">
      <div class="card-body">
        <h5 class="card-title">Tambah Produk Baru</h5>
        <form action="/admin-toko/tambah-produk" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" required>
          </div>
          <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" placeholder="Masukkan harga produk" required>
          </div>
          <div class="mb-3">
            <label for="gambar_produk" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" required>
          </div>
          <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="4" placeholder="Masukkan deskripsi produk"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Simpan Produk</button>
        </form>
      </div>
    </div>

    <!-- Daftar Produk -->
    <div class="mt-5">
      <h2 class="text-center">Daftar Produk</h2>
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produks as $produk)
          <tr>
            <td>{{ $produk->nama }}</td>
            <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
            <td>
              <img src="{{ asset(str_replace('public/', 'storage/', $produk->gambar)) }}" style="max-height: 50px;" alt="{{ $produk->nama }}">
            </td>
            <td>
              <!-- Tombol Hapus -->
              <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
     
</html>
