<?php
include('../koneksi.php');


$merk = $_POST['merk'];
$type = $_POST['type'];
$warna = $_POST['warna'];
$harga_mobil = $_POST['harga_mobil'];
@copy($_FILES[gambar][tmp_name],
"../admin/gambar/".$_FILES[gambar][name]);
$gambar = $_FILES[gambar][name];
$query=mysql_query("insert into mobil (kode_mobil,merk,type,warna,harga_mobil,gambar) values('','$merk','$type','$warna','$harga_mobil','$gambar')") or die(mysql_error());
if($query){
	header('location:input_mobil.php');
}
?>




