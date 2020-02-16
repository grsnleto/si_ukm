<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ukm";
$kon = @mysqli_connect($host,$user,$pass,$dbname);

if (!$kon) {
	die("Gagal Koneksi Karena : ".
		mysqli_connect_error());
}
?>