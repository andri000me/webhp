<?php
include('../koneksi.php');

$ktp=$_POST['ktp'];
$nama_pembeli=$_POST['nama_pembeli'];
$alamat_pembeli=$_POST['alamat_pembeli'];
$telp_pembeli=$_POST['telp_pembeli'];
$kode_mobil=$_POST['kode_mobil'];
$kode_paket=$_POST['kode_paket'];
$fotokopi_ktp=$_POST['fotokopi_ktp'];
$fotokopi_kk=$_POST['fotokopi_kk'];
$fotokopi_slip_gaji=$_POST['fotokopi_slip_gaji'];
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
header('location:sudah_punya.php');
}
else{
$query1=mysql_query("insert into pembeli (ktp,nama_pembeli,alamat_pembeli,telp_pembeli) values ('$ktp','$nama_pembeli','$alamat_pembeli','$telp_pembeli')") or die (mysql_error());
$query1=mysql_query("insert into pembeli (kode_kredit,ktp,kode_paket,kode_mobil,tgl_kredit,fotokopi_ktp,fotokopi_kk,fotokopi_slip_gaji) values ('','$kode_paket','$ktp','$kode_paket','$kode_mobil','$tgl_kredit','$fotokopi_ktp','$fotokopi_kk','$fotokopi_slip_gaji')") or die (mysql_error());
$query=mysql_query("insert into beli_cash (kode_cash,ktp,kode_mobil,cash_tgl,cash_bayar) values ('','$ktp','$kode_mobil','$cash_tgl','$cash_bayar')") or die (mysql_error());
if($query){
	header('location:../index.php');
}
}
?>