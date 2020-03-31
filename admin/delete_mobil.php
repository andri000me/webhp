<?php
include('../koneksi.php');
$id=$_GET['id'];
$query=mysql_query("delete from mobil where kode_mobil='$id'")or die (mysql_error());
if($query){
	header('location:lihat_mobil.php');
}
?>