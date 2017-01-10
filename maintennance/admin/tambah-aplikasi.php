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
            <form method="post" action="proses-tambah-aplikasi.php">
			<div id="list">
				<p><input type="hidden" name="ID"></p>
				<p>Tanggal mulai</p>
                <p><input type="date" name="tanggal_mulai"></p>
				<p>Tanggal selesai</p>
                <p><input type="date" name="tanggal_selesai"></p>
                <p>Nama aplikasi</p>
                <p><input type="text" name="name"></p>
                <p>PIC</p>
                <p><input type="text" name="pic"></p>
				<p>Dibuat oleh</p>
                <p><input type="text" name="owner"></p>
				<p>Checklist</p>
				<p><input type="hidden" id="id_total" name="id_total" value="5"></p>
                <p><input type="text" name="checklist1"></p>
				<p><input type="text" name="checklist2"></p>
				<p><input type="text" name="checklist3"></p>
				<p><input type="text" name="checklist4"></p>
				<p><input type="text" name="checklist5"></p>
				<script>
var $total = 5;
function myFunction() {
	$total++;
	var a = document.createElement("p");
    var x = document.createElement("INPUT");
	x.setAttribute("type", "text");
    x.setAttribute("name", "checklist" + $total);
    a.appendChild(x);
    document.getElementById("list").appendChild(a);
	document.getElementById("id_total").value = $total;
}
</script>
</div>
				<input type="button" onclick="myFunction()" value="tambah"></input>
				<p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
