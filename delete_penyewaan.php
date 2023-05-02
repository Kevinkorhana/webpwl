<?php
include "koneksi.php";

$id_sewa = $_GET['id'];

$sql = "DELETE FROM penyewaan WHERE id='$id'";

if ($koneksi->query($sql) === TRUE) {
    header("location: daftar_penyewaan.php");
} else {
    echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
?>
