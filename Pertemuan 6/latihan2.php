<?php
	$con = mysqli_connect("localhost","root","");

	$dbname="lat_dbase";
	$cek = mysqli_query($con,"CREATE DATABASE lat_dbase") or die ("Gagal membuat database: $dbname");

	if($cek){
		echo "Database $dbname berhasil dibuat";
	}
?>