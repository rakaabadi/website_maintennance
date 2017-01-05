<?php
session_start();
if (isset($_SESSION['user']) && ($_SESSION['admin'] == 0)){
    header('Location: ../user/index.php');
    exit();
}
if (!isset($_SESSION['user'])){
    header('Location: ../login.php');
    exit();
}
include '../connection.php';

$nama = $_POST['nama'];	
$prestasi = $_POST['prestasi'];

if ($nama == null or $prestasi == null){
	echo "<script> alert('data tidak boleh ada yang kosong');</script>";
	$hasil = false;
	echo "<script> javascript:history.back();</script>";
} else {
	$query = "INSERT INTO prestasi (nama, prestasi,image) VALUES ('$nama','$prestasi','$imagetmp')";
	$hasil = mysqli_query($db, $query);
}

if ($hasil == true) {
	echo "<script>location.href='index.php';</script>";
} else {
	echo "<script>alert('data gagal disimpan'); location.href='tambah-prestasi.php';</script>";
}