<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "prpl";



	$koneksi = new mysqli($host, $user, $password);

	if ($koneksi->connect_error) {
		die("Koneksi ke database gagal");
	}else{
		echo("Koneksi ke database terhubung");
	}


?>