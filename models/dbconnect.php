<?php
// Informasi koneksi database
$host = 'localhost'; // Lokasi database (localhost jika di server lokal)
$dbname = 'ornamental'; // Nama database
$username = 'root'; // Nama pengguna database
$password = ''; // Kata sandi pengguna database (kosong jika tidak ada)


$conn = new mysqli("$host", "$username", "", "$dbname");

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
