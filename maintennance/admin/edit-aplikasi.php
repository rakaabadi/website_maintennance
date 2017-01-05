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


include '../connection.php';

$id = $_GET['aaa'];
$query = "SELECT * FROM prestasi WHERE id = '$id'";
$hasil = mysqli_query($db, $query);
$data_prestasi = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Prestasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
        <div  align = "left">
            <h3>Edit Prestasi</h3>
            <form method="post" action="proses-edit-prestasi.php">
				<p><input type="hidden" name="ID" value="<?php echo $data_prestasi['ID']; ?>"></p>
                <p>Nama</p>
                <p><input type="text" name="nama" value="<?php echo $data_prestasi['nama']; ?>"></p>
				<p>Prestasi</p>
                <p><textarea name="prestasi"><?php echo $data_prestasi['prestasi']; ?></textarea></p>
				<p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
