<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dealer</title>
<link href="../bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="../bootstrap-3.3.2-dist/js/npm.js"></script>
</head>
<body>
<?php
include('../koneksi.php');
$ktp=$_POST['ktp'];
$nama_pembeli=$_POST['nama_pembeli'];
$alamat_pembeli=$_POST['alamat_pembeli'];
$tlp_pembeli=$_POST['telp_pembeli'];
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
echo "<a href='../loginphp.php'>Silahkan login </a>";
}
elseif($cek_user > 0){
echo '<div class="alert alert-danger">Username sudah ada yang punya</div>';
echo "<a href='../loginphp.php'>Silahkan login </a>";
}
else{
$q=mysql_query("insert into login (kode_cash,ktp,username,password,level) values ('','$ktp','$username','$password','$level')");

$query=mysql_query("insert into pembeli (ktp,nama_pembeli,alamat_pembeli,telp_pembeli) values ('$ktp','$nama_pembeli','$alamat_pembeli','$telp_pembeli')") or die (mysql_error());
if($query){
	header('location:form_input_pembeli.php');
}
}
?>
</body>
</html>