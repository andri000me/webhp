<?php
include('koneksi.php');
include('function.php');
//input data pelanggan
$kd = $_POST['kode_mobil'];
$merk = $_POST['merk'];
$tipe = $_POST['type'];
$warna  = $_POST['warna'];
$harga = $_POST['harga_mobil'];
@copy($_FILES[gambar][tmp_name],"../mobil/".$_FILES[gambar][name]);
$gambar = $_FILES[gambar][name];
$ktp=$_POST['ktp'];
$nama_pembeli=$_POST['nama_pembeli'];
$alamat_pembeli=$_POST['alamat_pembeli'];
$telp_pembeli=$_POST['telp_pembeli'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$update_data_mobil =("update mobil set merk = '$merk', type = '$tipe', warna = '$warna', harga_mobil = '$harga', gambar = '$gambar' where kode_mobil = $kd");
$input_pembeli=("insert into pembeli (ktp,nama_pembeli,alamat_pembeli,telp_pembeli) values ('$ktp','$nama_pembeli','$alamat_pembeli','$telp_pembeli')");
$input_username = ("Insert into login (ktp,username,password,level) values('$ktp','$username','$password','$level')");
//function koneksi
koneksi($input_pembeli);
koneksi($input_username);
koneksi($update_data_mobil);
header('location:../index.php');
?>
