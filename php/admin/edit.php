<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header('Location: login_admin.php');
    exit();
}
include '../config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM crud_0003 WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $layanan = $_POST['layanan'];
    $status = $_POST['status'];

    mysqli_query($conn, "UPDATE crud_0003 SET 
        nama='$nama', 
        alamat='$alamat', 
        telepon='$telepon', 
        email='$email', 
        layanan='$layanan', 
        status='$status' 
        WHERE id=$id");

    echo "<script>alert('Data berhasil diupdate!');window.location.href='data.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>F1D02310003 - LombokCool</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "../css/edit.css">
</head>

<body>

<div class="form-card">
    <h2><i class="bi bi-pencil-square me-2"></i>Edit Data Pelanggan</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']); ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                <input type="text" name="alamat" class="form-control" value="<?= htmlspecialchars($data['alamat']); ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" name="telepon" class="form-control" value="<?= htmlspecialchars($data['telepon']); ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($data['email']); ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label>Layanan</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-tools"></i></span>
                <input type="text" name="layanan" class="form-control" value="<?= htmlspecialchars($data['layanan']); ?>" required>
            </div>
        </div>
        <div class="mb-4">
            <label>Status</label>
            <select name="status" class="form-select" required>
                <option value="Pending" <?= $data['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                <option value="Selesai" <?= $data['status'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                <option value="Batal" <?= $data['status'] == 'Batal' ? 'selected' : ''; ?>>Batal</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" name="update" class="btn btn-primary me-2">
                <i class="bi bi-save"></i> Simpan Perubahan
            </button>
            <a href="data.php" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>