<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $layanan = mysqli_real_escape_string($conn, $_POST['layanan']);

    $query = "INSERT INTO crud_0003 (nama, alamat, telepon, email, layanan, status) 
              VALUES ('$nama', '$alamat', '$telepon', '$email', '$layanan', 'Pending')";

    if (mysqli_query($conn, $query)) {
        header("Location: sukses.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>