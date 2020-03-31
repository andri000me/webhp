<?php
include('../koneksi.php');
$ktp=$_POST['ktp'];
$nama_pembeli=$_POST['nama_pembeli'];
$alamat_pembeli=$_POST['alamat_pembeli'];
$telp_pembeli=$_POST['telp_pembeli'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$query=mysql_query("insert into pembeli (ktp,nama_pembeli,alamat_pembeli,telp_pembeli) values ('$ktp','$nama_pembeli','$alamat_pembeli','$telp_pembeli')") or die (mysql_error());
$query2=mysql_query("insert into login (id_login,ktp,username,password,level) values ('','$ktp','$username','$password','$level')") or die (mysql_error());
if($query2){
header('location:../index.php');
}
?>
