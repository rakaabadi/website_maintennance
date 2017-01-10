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

$id = $_GET['aaa'];

$query = "DELETE FROM application WHERE id = '$id'";

$hasil = mysqli_query($db, $query);

$query2 = "drop table userid_$id";

$hasil2 = mysqli_query($db, $query2);


if ($hasil == true) {
	echo "<script>location.href='aplikasi.php';</script>";
} else {
	echo "<script>alert('gagal'); location.href='index.php';</script>";
}