<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

/*** mysql database ***/
$database= 'spesa';
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    /*** mencetak pesan kalau database sudah berhasil terhubung ***/
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>