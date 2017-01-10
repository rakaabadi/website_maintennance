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
$query = "SELECT * FROM userid_$id";
$hasil = mysqli_query($db, $query);

$data_aplikasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
	$data_aplikasi[] = $row;	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Aplikasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
        <div  align = "left">
            <h3>Edit Aplikasi</h3>
            <form method="post" action="proses-edit-aplikasi.php">
			<input type="hidden" name="id_total" value="userid_<?php echo $id ?>">
			<table border="1">
			<?php foreach ($data_aplikasi as $aplikasi) :?>

				<p><input type="hidden" name="ID<?php echo $aplikasi['ID']; ?>" value="<?php echo $aplikasi['ID']; ?>"></p>
				<tr>
				<td>
                <p><?php echo $aplikasi['checklist']; ?></td><td><input type="radio"  name="name<?php echo $aplikasi['ID']; ?>" value="yes" <?php if ($aplikasi['yes'] == 1){echo "checked";}?>>yes</input><input type="radio"  name="name<?php echo $aplikasi['ID']; ?>" value="no" <?php if ($aplikasi['no'] == 1){echo "checked";}?>>no</input><input type="radio"  name="name<?php echo $aplikasi['ID']; ?>" value="na" <?php if ($aplikasi['na'] == 1){echo "checked";}?>>not applicable</input>
				</td>
				</tr>
				<?php endforeach ?>
				</table>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
