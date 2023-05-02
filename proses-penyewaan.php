<?php
$alamat = $_POST["alamat"];
$mobil = $_POST["mobil"];
$total_harga = $_POST["total_harga"];
$jumlah_hari = $_POST["jumlah_hari"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental_mobil";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO penyewaan_mobil (alamat, mobil, jumlah_hari, total_harga) VALUES ('$alamat', '$mobil', '$jumlah_hari', '$total_harga')";
if (mysqli_query($conn, $sql)) {
  
  header("location: daftar-penyewaan.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
