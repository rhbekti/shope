<?php
session_start();


$host = "localhost";
$user = "root";
$pass = "";
// di sesuaikan dengan nama database masing2
$db = "shope";


$koneksi = mysqli_connect($host,$user,$pass,$db);

// cek koneksi
if(!$koneksi){
	echo "server error";
}




?>