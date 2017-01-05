<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);

if ($data_user != null) {

    if ($password == $data_user['password']) {
        $_SESSION['user'] = $data_user['username'];
        header('Location: aplikasi.php');
    } else {
        echo "<script> alert('username/password salah'); location.href='index.php';</script>";
    }
} else {
    echo "<script> alert('username/password salah'); location.href='index.php';</script>";
}
