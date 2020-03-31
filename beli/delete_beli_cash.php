<?php
include('../koneksi.php');
$id=$_GET['id'];
$query=mysql_query("delete from beli_cash where kode_cash='$id'")or die (mysql_error());
if($query){
	header('location:../admin/lihat_data_beli_cash.php');
}
?>
