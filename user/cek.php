<?php
	session_start();
	if(!isset($_SESSION["level"]) || $_SESSION["level"] != 2){
		header("location:../index.php");
		exit();
	}
?>
