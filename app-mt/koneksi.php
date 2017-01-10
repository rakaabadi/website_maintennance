<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'app-mt';

$db = mysqli_connect($host, $username, $password, $database) or die('gagal konek');
mysqli_select_db('app-mt');
?>
