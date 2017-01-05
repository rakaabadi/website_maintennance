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

$id = $_GET['aaa'];

$query = "DELETE FROM prestasi WHERE id = '$id'";

$hasil = mysqli_query($db, $query);

if ($hasil == true) {
	echo "<script>location.href='index.php';</script>";
} else {
	echo "<script>alert('gagal'); location.href='index.php';</script>";
}