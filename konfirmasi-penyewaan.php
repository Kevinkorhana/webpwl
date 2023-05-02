<!DOCTYPE html>
<html>
<head>
  <title>Konfirmasi Penyewaan Mobil</title>
</head>
<body>
  <?php
  if (isset($_GET["mobil"]) && isset($_GET["jumlah_hari"]) && isset($_GET["total_harga"])) {
    $mobil = $_GET["mobil"];
    $jumlah_hari = $_GET["jumlah_hari"];
    $total_harga = $_GET["total_harga"];
  ?>

  <h1>Konfirmasi Penyewaan Mobil</h1>
  <p>Anda akan menyewa mobil <?php echo $mobil; ?> selama <?php echo $jumlah_hari; ?> hari dengan total harga <?php echo "Rp " . number_format($total_harga, 0, ",", "."); ?>.</p>
  <p>Silahkan lanjutkan ke pembayaran untuk menyelesaikan proses penyewaan.</p>

  <?php
  } else {
  ?>

  <h1>Konfirmasi Penyewaan Mobil</h1>
  <p>Terjadi kesalahan. Silahkan kembali ke halaman sebelumnya dan coba lagi.</p>

  <?php
  }
  ?>
</body>
</html>
