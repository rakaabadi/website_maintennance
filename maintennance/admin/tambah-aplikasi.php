<?php
session_start();
/*
if (isset($_SESSION['user']) && ($_SESSION['admin'] == 0)){
    header('Location: ../user/index.php');
    exit();
}
*/

if (!isset($_SESSION['user'])){
    header('Location: ../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Prestasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <h3>Tambah Aplikasi</h3>
            <form method="post" action="proses-tambah-prestasi.php">
				<p><input type="hidden" name="ID"></p>
                <p>Nama</p>
                <p><input type="text" name="nama"></p>
                <p>Owner</p>
                <p><input type="text" name=""></p>
				<p>Checklist</p>
                <p><input type="text" name=""></p>
                <p><input type="text" name=""></p>
                <p><input type="text" name=""></p>
                <p><input type="text" name=""></p>
				<p><input type="text" name=""></p>
				<p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
