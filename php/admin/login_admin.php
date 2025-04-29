<?php
session_start();
$admin_password = "admin003";

if (isset($_SESSION['admin_login'])) {
    header("Location: data.php");
    exit();
}

if (isset($_POST['password'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_login'] = true;
        header("Location: data.php");
        exit();
    } else {
        $error = "Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>F1D02310003 - LombokCool</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="../../css/login_admin.css" rel="stylesheet">
</head>

<body>

<div class="overlay">
  <div class="login-card text-center">
    <h3><i class="bi bi-lock-fill me-2"></i>Login Admin</h3>
    <?php if (isset($error)) { ?>
      <div class="alert alert-danger"><?= $error; ?></div>
    <?php } ?>
    <form method="POST" novalidate>
      <div class="mb-4">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Masukkan Password Admin" required>
        </div>
      </div>
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
      <a href="../../page/index.html" class="btn btn-outline-secondary w-100">
        <i class="bi bi-arrow-left"></i> Kembali ke Beranda
      </a>
    </form>
  </div>
</div>

</body>
</html>