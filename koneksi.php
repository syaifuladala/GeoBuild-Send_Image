<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "geobuild";
	
	$koneksi = new mysqli($hostname, $username, $password);
	
	if($koneksi){
		mysqli_select_db($koneksi, $db);
	}
?>