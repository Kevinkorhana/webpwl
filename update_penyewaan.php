<?php
include "koneksi.php";

$id_sewa = $_POST['id'];
$alamat = $_POST['alamat'];
$nama_mobil = $_POST['mobil'];
$jumlah_hari = $_POST['jumlah_hari'];
$total_harga = $_POST['total_harga'];

$sql = "UPDATE penyewaan SET alamat='$alamat', nama_mobil='$nama_mobil', jumlah_hari='$jumlah_hari', total_harga='$total_harga' WHERE id='$id'";

if ($koneksi->query($sql) === TRUE) {
    header("location: daftar_penyewaan.php");
} else {
    echo "Error updating record: " . $koneksi->error;
}

$koneksi->close();
