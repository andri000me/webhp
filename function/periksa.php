<?php 

//jika session username belum dibuat, atau session username kosong
session_start();
	if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
		header("location:user/index_user.php");
		exit();
	}
?>