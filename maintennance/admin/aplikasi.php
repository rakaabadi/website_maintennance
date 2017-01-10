<?php
include 'proses-data-aplikasi.php';
?>
<html>
<head>
</head>
<body>
<?php if (empty($data_prestasi)) : ?>
			<table align="center" cellpadding="0" cellspacing="0" width="100%" border="1">
                <tr>
                    <th width="10%">Tanggal</th>
                    <th width="50%">Aplikasi</th>
					<th width="10%">Owner</th>
					<th width="10%">Dibuat Oleh</th>
					<th width="10%"><div class="">
                <a href="tambah-aplikasi.php"><button class="">Tambah Data</button></a>
            </div></th>
                </tr>
            <?php else : ?>
			<table align="center" cellpadding="0" cellspacing="0" width="100%" border="1">
                <tr>
                    <th width="10%">Tanggal mulai</th>
					<th width="10%">Tanggal selesai</th>
                    <th width="50%">Aplikasi</th>
					<th width="10%">PIC</th>
					<th width="10%">Dibuat Oleh</th>
					<th width="10%"><div class="">
                <a href="tambah-aplikasi.php"><button class="">Tambah Data</button></a>
            </div></th>
                </tr>

				<?php foreach ($data_prestasi as $prestasi) : ?>
                <tr>
                    <td align="justify" style="padding:1%"><font size = "5"><b><?php echo $prestasi['tanggal_mulai'] ?></b></font></td>
					<td align="justify" style="padding:1%"><font size = "5"><b><?php echo $prestasi['tanggal_selesai'] ?></b></font></td>
					<td align="justify" style="padding:1%"><font size = "5"><b><?php echo $prestasi['name'] ?></b></font></td>
					<td align="justify" style="padding:1%"><font size = "5"><b><?php echo $prestasi['pic'] ?></b></font></td>
					<td align="justify" style="padding:1%"><font size = "5"><b><?php echo $prestasi['owner'] ?></b></font></td>
                    <td rowspan = "2" align = "center">
                        <a href="edit-aplikasi.php?aaa=<?php echo $prestasi['ID']; ?>"> <button class="btn btn-edit">Checklist</button></a>
                        <a href="delete-aplikasi.php?aaa=<?php echo $prestasi['ID']; ?>"> <button class="btn btn-hapus">Hapus</button></a>
					</td>
                </tr>
				<tr>
                    
                <?php  endforeach ?>
            
            <?php endif ?>
			<tr>
			<td height = '50' style='padding:1%'>
			<?php for ($i=1; $i<=$totalpage; $i++) { 
            echo "<a href='aplikasi.php?halaman=".$i."'> <button class='btn btn-edit'>".$i."</button></a>"; 
			}
			?>
						</td>
			</tr>
			</table>
			
        </div>
</body>
</html>