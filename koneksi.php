<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "nama_database";


$conn = mysqli_connect($host, $user, $password, $dbname);


if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>
