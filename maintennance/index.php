<?php

session_start();

/*
if (isset($_SESSION['user']) && ($_SESSION['admin'] == 1)){
    header('Location: admin/index.php');
    exit();
}
*/

if (isset($_SESSION['user'])){
    header('Location: admin/aplikasi.php');
    exit();
}

?>
<html>
<head>
</head>
<body>
<form method="post" action="proses-login.php">
<input type="text" name="username"></input><br>
<input type="password" name="password"></input><br>
<input type="submit" value="submit"></input>
</form>
</body>
</html>