<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>F1D02310003 - LombokCool</title>
    <link rel="stylesheet" href="../css/daftar.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Navbar Start -->
  <nav class="navbar">
    <div class="navbar-logo">
      <h1 class="navbar-logo-text">Lombok<span>Cool</span></h1>
    </div>

    <div class="navbar-nav">
      <a href="../page/index.html">Home</a>
      <a href="../page/layanan.html">Layanan</a>
      <a href="../page/galeri.html">Galeri</a>
      <a href="daftar.php">Hubungi Kami</a>
      <a href="admin/login_admin.php">Admin</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- navbar end -->

<div class="form">
    <form action="tambah.php" method="POST" class="sub-form">
        <div class="upper-form">
            <h2>Hubungi Kami</h2>

            <label for="nama">Nama</label>
            <input type="text" name="nama" required class="input-form">

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" required class="input-form">

            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" required class="input-form">

            <label for="email">Email</label>
            <input type="email" name="email" required class="input-form">

            <label for="layanan">Pilih Layanan</label>
            <select name="layanan" required class="input-form">
                <option value="" disabled selected>Pilih layanan</option>
                <option value="Service Rutin">Service Rutin (Cuci AC)</option>
                <option value="Service Perbaikan">Service Perbaikan AC</option>
                <option value="Isi Freon">Isi Ulang Freon</option>
                <option value="Pasang Baru">Pasang Baru</option>
                <option value="Bongkar Pasang">Bongkar Pasang</option>
                <option value="Perawatan Besar">Perawatan Besar</option>
                <option value="Tambah Pipa">Jasa Tambah Pipa AC</option>
                <option value="Service Kompresor">Service Kompresor</option>
            </select>

            <button type="submit" class="btn-form">Kirim</button>
        </div>
    </form>
</div>

<script src="https://unpkg.com/feather-icons"></script>
  <!-- script fether -->
  <script>
    feather.replace();
  </script>

  <!-- my js -->
  <script src="../js/script.js"></script>
  
</body>
</html>