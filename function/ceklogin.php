<?php
session_start();
include ('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$strsql = "select * from login where username ='$username' and password ='$password'";
$preparedStatement=$dbh->prepare($strsql);
//$preparedStatement->bindParam(":username",$username);
//$preparedStatement->bindParam(":password",$password);
$preparedStatement->execute();
//$query = mysql_query($strsql);

//$data = mysql_fetch_array($query);
$data = $preparedStatement->fetchAll();
foreach($data as $data)
{
	$data['id_login'];
	$data['level'];
}
$res = $dbh->query($strsql);
if($res->fetchColumn() > 0)
{
	$_SESSION['id_login'] = $data['id_login'];
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $data['level'];
	if($data['level'] =='1'){
		header('location:../admin/index_admin.php');
		exit();
	}
	else if ($data['level'] =='2'){
		header('location:../user/index.php');
		exit();
	}
}
else 
{
	header('location:login.php');
	exit();
}
?>
