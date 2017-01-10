<?php

include '../connection.php';

session_start();

if(!isset($_SESSION['user'])) {
	header('location: ../login.php');
	exit();
}
$yes_total = 0;
$no_total = 0;
$na_total = 0;
$yes = 0;
$no = 0;
$na = 0;

$userid = $_POST['id_total'];

$query = "SELECT * FROM $userid";
$hasil = mysqli_query($db, $query);
$total = mysqli_num_rows($hasil);

for ($i = 1;$i <= $total;$i++){
if($_POST['name'.$i] == "yes"){
	$yes_total += 1;
	$yes = 1;
	$no = 0;
	$na = 0;
}
if($_POST['name'.$i] == "no"){
	$no_total += 1;
	$yes = 0;
	$no = 1;
	$na = 0;
}
if($_POST['name'.$i] == "na"){
	$na_total += 1;
	$yes = 0;
	$no = 0;
	$na = 1;
}
$query = "update $userid set yes = '$yes',no = '$no',na='$na' where id = '$i'";
$hasil = mysqli_query($db, $query);

}

if ($hasil == true) {
	echo "<script>location.href='aplikasi.php';</script>";
} else {
	echo "<script>alert('gagal'); location.href='index.php';</script>";
}