<?php
$server = "localhost"; // Sesuaikan dengan server Anda
$user = "root";        // Username database
$password = "";        // Password database
$db_name = "sekolahan"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($server, $user, $password, $db_name);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
