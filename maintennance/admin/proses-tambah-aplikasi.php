<?php
session_start();

/*
if (isset($_SESSION['user']) && ($_SESSION['admin'] == 0)){
    header('Location: ../user/index.php');
    exit();
}
*/

if (!isset($_SESSION['user'])){
    header('Location: ../index.php');
    exit();
}
include '../connection.php';

$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$name = $_POST['name'];	
$pic = $_POST['pic'];
$owner = $_POST['owner'];
$id_total = $_POST['id_total'];

$query = "INSERT INTO application (tanggal_mulai,tanggal_selesai,name,pic,owner) VALUES ('$tanggal_mulai','$tanggal_selesai','$name','$pic','$owner')";
$hasil = mysqli_query($db, $query);

$select = "SELECT * FROM application where name = '$name'";
$select2 = mysqli_query($db, $select);
$application = mysqli_fetch_assoc($select2);
$application_id = $application['ID'];
$create = "create table userid_$application_id (ID int(255) AUTO_INCREMENT PRIMARY KEY,checklist varchar(255) not null,yes int(255) not null,no int(255) not null,na int(255) not null)";
$hasilcreate = mysqli_query($db,$create);

for ($i = 1;$i <= $id_total;$i++){
$checklist = $_POST['checklist'.$i];
$query = "INSERT INTO userid_$application_id (checklist) VALUES ('$checklist')";
$hasil = mysqli_query($db, $query);
}

if ($hasil == true) {
	echo "<script>location.href='aplikasi.php';</script>";
} else {
	echo "<script>alert('data gagal disimpan'); location.href='tambah-prestasi.php';</script>";
}