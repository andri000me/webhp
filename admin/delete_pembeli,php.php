<?php
include('../koneksi.php');
$id=$_GET['id'];
$query=mysql_query("delete from pembeli where ktp='$id'")or die (mysql_error());
if($query){
	header('location:lihat_pembeli.php');
}
?>
