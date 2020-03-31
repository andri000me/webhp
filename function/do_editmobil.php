<?php

	include('koneksi.php');

	$kd = $_POST['kode_mobil'];
	$merk = $_POST['merk'];
	$tipe = $_POST['type'];
	$warna  = $_POST['warna'];
	$harga = $_POST['harga_mobil'];
	@copy($_FILES[gambar][tmp_name],"../mobil/".$_FILES[gambar][name]);
	$gambar = $_FILES[gambar][name];

	$sql = mysql_query("update mobil set merk = '$merk', type = '$tipe', warna = '$warna', harga_mobil = '$harga', gambar = '$gambar' where kode_mobil = $kd");
	header('location: mobil.php');
	exit();
?>