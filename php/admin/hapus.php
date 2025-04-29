<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header('Location: index.html');
    exit();
}

include '../config.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM crud_0003 WHERE id=$id");

echo "<script>alert('Data berhasil dihapus!');window.location.href='data.php';</script>";
?>