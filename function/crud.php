<?php
include('koneksi.php');
//input data pelanggan
$ktp=$_POST['ktp'];
$nama_pembeli=$_POST['nama_pembeli'];
$alamat_pembeli=$_POST['alamat_pembeli'];
$telp_pembeli=$_POST['telp_pembeli'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$inputdatapembeli = $dbh->prepare("insert into pembeli (ktp,nama_pembeli,alamat_pembeli,telp_pembeli) values ('$ktp','$nama_pembeli','$alamat_pembeli','$telp_pembeli')");
$inputdatapembeli->execute();
$inpputdatauser = $dbh->prepare("Insert into login (ktp,username,password,level) values('$ktp','$username','$password','$level')");
$inpputdatauser->execute();
header('location:../index.php');
 ?>
