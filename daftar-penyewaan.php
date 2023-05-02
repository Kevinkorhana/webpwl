<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental_mobil";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM penyewaan_mobil";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Mobil</th><th>Jumlah Hari</th><th>Total Harga</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["mobil"] . "</td><td>" . $row["jumlah_hari"] . "</td><td>" . $row["total_harga"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "Tidak ada data";
}

mysqli_close($conn);
?>
