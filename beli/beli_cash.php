<?php
include('../koneksi.php');

$ktp=$_POST['ktp'];
$nama_pembeli=$_POST['nama_pembeli'];
$alamat_pembeli=$_POST['alamat_pembeli'];
$telp_pembeli=$_POST['telp_pembeli'];
$kode_mobil=$_POST['kode_mobil'];
$cash_tgl=$_POST['cash_tgl'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];


$cek_ktp=mysql_num_rows(mysql_query("SELECT ktp
FROM pembeli
WHERE ktp = '$_POST[ktp]'"));
$cek_user=mysql_num_rows(mysql_query("SELECT username
FROM login
WHERE username = '$_POST[username]'"));
if($cek_ktp > 0){
echo '<div class="alert alert-danger">ktp sudah ada</div>';
header('location:sudah_punya.php');
}
elseif($cek_user > 0){
echo '<div class="alert alert-danger">Username sudah ada yang punya</div>';
}
else{
$q=mysql_query("insert into login (id_login,ktp,username,password,level) values ('','$ktp','$username','$password','$level')")or die (mysql_error());
$query1=mysql_query("insert into pembeli (ktp,nama_pembeli,alamat_pembeli,telp_pembeli) values ('$ktp','$nama_pembeli','$alamat_pembeli','$telp_pembeli')") or die (mysql_error());
$query=mysql_query("insert into beli_cash (kode_cash,ktp,kode_mobil,cash_tgl,cash_bayar) values ('','$ktp','$kode_mobil','$cash_tgl','$cash_bayar')") or die (mysql_error());
if($query){
	header('location:../index.php');
}
}
?>