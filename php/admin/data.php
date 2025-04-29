<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header("Location: login_admin.php");
    exit();
}
include '../config.php';

$result = mysqli_query($conn, "SELECT * FROM crud_0003 ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>F1D02310003 - LombokCool</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../css/data.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container my-5">
    <div class="card shadow p-4 rounded-4">

      <!-- NAVBAR -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="heading-lombok"><i class="bi bi-table"></i>Data Pelanggan</h2>
        <a href="logout.php" class="btn btn-outline-danger">
          <i class="bi bi-box-arrow-right"></i> Logout
        </a>
      </div>

      <!-- BUTTON TAMBAH -->
      <div class="text-end mb-3">
        <a href="../daftar.php" class="btn btn-lombok rounded-pill px-4">
          <i class="bi bi-plus-circle"></i> Tambah Pelanggan
        </a>
      </div>

      <!-- TABEL DATA -->
      <div class="table-responsive">
      <table id="tabel-data" class="table table-bordered table-hover align-middle text-center w-100 nowrap">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>Layanan</th>
              <th>Status</th>
              <th>Tanggal Pesan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; while($row = mysqli_fetch_assoc($result)) {
              $status = htmlspecialchars($row['status']);
              $badgeClass = match($status) {
                'Pending' => 'bg-warning text-dark',
                'Selesai' => 'bg-success',
                'Batal' => 'bg-danger',
                default => 'bg-secondary'
              };
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= htmlspecialchars($row['nama']); ?></td>
              <td><?= htmlspecialchars($row['alamat']); ?></td>
              <td><?= htmlspecialchars($row['telepon']); ?></td>
              <td><?= htmlspecialchars($row['email']); ?></td>
              <td><?= htmlspecialchars($row['layanan']); ?></td>
              <td><span class="badge <?= $badgeClass ?>"><?= $status ?></span></td>
              <td><?= htmlspecialchars($row['tanggal_pesan']); ?></td>
              <td class="text-nowrap">
                <a href="edit.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn-action btn-edit me-1" title="Edit">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <button onclick="hapusData(<?= htmlspecialchars($row['id']); ?>)" class="btn-action btn-delete" title="Hapus">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    $(document).ready(function () {
      $('#tabel-data').DataTable();
    });

    function hapusData(id) {
      Swal.fire({
        title: 'Yakin mau hapus?',
        text: "Data yang sudah dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'hapus.php?id=' + id;
        }
      });
    }

    $('#tabel-data').DataTable({
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Cari data...",
        lengthMenu: "Tampilkan _MENU_ entri",
        info: "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
        paginate: {
          first: "Awal",
          last: "Akhir",
          next: "→",
          previous: "←"
        },
        zeroRecords: "Tidak ditemukan data yang cocok",
        infoEmpty: "Menampilkan 0 data",
        infoFiltered: "(disaring dari _MAX_ total data)"
      }
    });
  </script>
</body>
</html>