<?php

if (session_status()!=PHP_SESSION_ACTIVE) {
	session_start();
}

if(!isset($_SESSION['user'])) {
	header('location: index.php');
	exit();
}

/*
if ($_SESSION['admin'] == 0){
	header('location: index.php');
}
*/		

include 'connection.php';

$rowsPerPage = 5;

if(empty ($_GET['halaman'])){
	$halaman = 1;
}else{
$halaman = $_GET['halaman'];
}

$offset = ($halaman - 1) * $rowsPerPage;

$query = "SELECT * FROM application order by id desc limit $rowsPerPage offset $offset";

$hasil = mysqli_query($db, $query);

$query2 = "SELECT * FROM application";

$hasil2 = mysqli_query($db, $query2);

$total = mysqli_num_rows($hasil2);

$totalpage = ceil($total / $rowsPerPage);

$data_prestasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
	$data_prestasi[] = $row;	
}


