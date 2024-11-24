<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "foto";

// Membuat koneksi menggunakan mysqli
$koneksi = @mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$koneksi) {
    die("Gagal koneksi: " . mysqli_connect_error());
}

// Jika koneksi berhasil
echo "Koneksi berhasil!";
?>
