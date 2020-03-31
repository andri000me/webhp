<?php
$host='localhost';
$user='ukom2015';
$pass='ukom2015';
$dbmane='ukom2015';
$koneksi=mysql_connect($host,$user,$pass) or die (msql_error());
$database=mysql_select_db($dbmane);
?>