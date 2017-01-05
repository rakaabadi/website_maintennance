<?php

include '../connection.php';

session_start();
if(!isset($_SESSION['user'])) {
	header('location: ../login.php');
	exit();
}

if ($_SESSION['admin'] == 0){
	header('location: ../login.php');
}

$nama = $_POST['nama'];
$prestasi = $_POST['prestasi'];
$id = $_POST['ID'];

	$query = "UPDATE prestasi 
			SET nama 			= '$nama',
				prestasi 		= '$prestasi'
				
			WHERE ID = '$id'";
		
$hasil = mysqli_query($db, $query);
if ($hasil == true) {
	echo "<script>location.href='index.php';</script>";
} else {
	echo "<script>alert('gagal'); location.href='index.php';</script>";
}