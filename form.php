<!DOCTYPE html>
<html>
<head>
<title>Formulir Penyewaan Mobil</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&family=Caveat&family=Instrument+Serif&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
<style>
	div {
		font-family: 
	}
	.form-container {
		max-width: 1000px;
		margin: 0 auto;
		padding: 20px;
		border: 80px solid #ccc;
		border-radius: 5px;
	}
	.form-container label,
	.form-container input,
	.form-container select {
		display: block;
		margin-bottom: 10px;
		width: 100%;
	}
	.form-container input,
	.form-container select {
		padding: 10px;
		border-radius: 50px;
		border: 1px solid #ccc;
		font-size: 16px;
	}
	.form-container input[type="submit"] {
		background-color: #27ae60;
		color: #fff;
		border: none;
		border-radius: 5px;
		padding: 10px;
		font-size: 16px;
		cursor: pointer;
		transition: all 0.3s ease;
	}
	.form-container input[type="submit"]:hover {
		background-color: #2ecc71;
	}
	.form-container .form-group {
		margin-bottom: 15px;
	}
	.form-container .form-group:after {
		content: "";
		display: table;
		clear: both;
	}
	.form-container .form-group label {
		float: left;
		width: 80%;
	}
	.form-container .form-group input,
	.form-container .form-group select {
		float: right;
		width: 50%;
	}
	.form-container .form-group input[type="text"] {
		text-align: left;
	}
	.btn-update {
  background-color: #4CAF50;
  color: black;
  padding: 20px 20px;
  border-radius: 5px;
  text-decoration: none;
}

.btn-delete {
  background-color: #f44336;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
}

</style>
</head>
<body>
<div class="form-container">
	<h2 style=" font-family: Castoro Titling;"> Formulir Penyewaan Mobil</h2>
	<form method="post" action="proses-penyewaan.php">

	<div class="form-group">
    <label style=" font-family: Castoro Titling;" for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
</div>
<div class="form-group">
<label style=" font-family: Castoro Titling;" for="mobil">Nama Mobil</label>
<select class="form-control" id="mobil" name="mobil">
	<option value="Toyota Avanza">Toyota Avanza</option>
	<option value="Suzuki Ertiga">Suzuki Ertiga</option>
	<option value="Honda Jazz">Honda Jazz</option>
	<option value="Toyota Innova">Toyota Innova</option>
	<option value="Mitsubishi Pajero Sport">Mitsubishi Pajero Sport</option>
	<option value="Toyota Rush">Toyota Rush</option>
	<option value="Honda Brio">Honda Brio</option>
</select>
</div>
<div class="form-group">
<label style=" font-family: Castoro Titling;" for="jumlah_hari">Jumlah Hari</label>
<input type="number" class="form-control" id="jumlah_hari" name="jumlah_hari" oninput="hitungHarga()" required>
</div>
<div class="form-group">
<label style=" font-family: Castoro Titling;" for="total_harga">Total Harga</label>
<input type="text" class="form-control" id="total_harga" name="total_harga" readonly>
</div>
<button style=" font-family: Castoro Titling;" type="submit" class="btn btn-primary" name="submit">Sewa Mobil</button>
<button style=" font-family: Castoro Titling;" href="update_penyewaan.php?id=<?php echo $row['id']; ?>" type="update" class="btn btn-primary">Update</a>
<button style=" font-family: Castoro Titling;" href="delete_penyewaan.php?id=<?php echo $row['id']; ?>" type="delete" class="bbtn btn-primary">Delete</a>

</form>

<script>
function hitungHarga() {
var mobil = document.getElementById("mobil").value;
var harga = 0;
var jumlah_hari = document.getElementById("jumlah_hari").value;
var total_harga = document.getElementById("total_harga");

switch(mobil) {
	case "Toyota Avanza":
	harga = 300000;
	break;
	case "Suzuki Ertiga":
	harga = 350000;
	break;
	case "Honda Jazz":
	harga = 400000;
	break;
	case "Toyota Innova":
	harga = 500000;
	break; 
	case "Mitsubishi Pajero Sport":
	harga = 1000000;
	break;
	case "Toyota Rush":
	harga = 300000;
	break;
	case "Honda Brio":
	harga = 250000;
	break;

}

var total = harga * jumlah_hari;
total_harga.value = total;
}
</script>

</div>
</body>
</html>
