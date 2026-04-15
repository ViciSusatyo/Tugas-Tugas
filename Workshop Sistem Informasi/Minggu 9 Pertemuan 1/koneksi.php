<?php
$servername = "localhost"; // Biasanya localhost
$username = "root";        // Default username XAMPP
$password = "";            // Default password XAMPP kosong
$database = "nama_db";     // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>
