<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$strsql = "select * from login where username ='$username' and password ='$password'";
$query = mysql_query($strsql);

$data = mysql_fetch_array($query);
$id_login= $data['id_login'];
$level = $data['level'];

if(mysql_num_rows($query)>0)
{
	$_SESSION['id_login'] = $id_login;
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $level;
	if($level=='1'){
		header('location:admin/index_admin.php');
		exit();
	}
	else if ($level=='2'){
		header('location:user/index_user.php');
		exit();
	}
}
else 
{
	header('location:login.php');
	exit();
}
?>
