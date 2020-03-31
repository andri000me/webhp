<?php
include('../koneksi.php');
$id = $_POST['kode_mobil'];
$merk = $_POST['merk'];
$type = $_POST['type'];
$warna = $_POST['warna'];
@copy($_FILES[gambar][tmp_name],
	"../admin/gambar/".$_FILES[gambar][name]);
$gambar = $_FILES[gambar][name];
$query=mysql_query("update mobil set kode_mobil='$id',merk='$merk',type='$type',warna='$warna',gambar='$gambar' where kode_mobil='$id'")or die (mysql_error());
if($query){
	header('location:lihat_mobil.php');
}
?>