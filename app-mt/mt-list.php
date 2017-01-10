<?php  
	session_start();

	//jika belum login,aligkan ke form login
	if (empty($_SESSION['user'])) {
		header('Location: login.php');
		exit();
	}

?>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Maintenance Application</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Coda|Josefin+Sans|Poiret+One|Forum" rel="stylesheet">
</head>

<style>
*{
	margin:0px;
	padding:0px;
}

body {
	background:url('img/bg.png');
	background-size:100% 100%;
	background-attachment:fixed;
}

</style>
<body>
		<a href="#"><button type="button" class="btn btn-Info" style="position:fixed; right:20px; bottom:20px; margin:10px; border-radius:25px; height:50px; width:50px;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-Plus"></span></button></a>
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="Modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Aplikasi</h4>
					</div>
					<div class="modal-body">
						<form class="form-group">
						<table class="table table-condensed">
							<tr>
								<td class="col-sm-4">Nama Aplikasi</td>
								<td class="col-sm-1">:</td>
								<td class="col-sm-7"><input type="text" class="form-control"></td>
							</tr>
							<tr>
								<td>Date Start</td>
								<td>:</td>
								<td><input type="Date" class="form-control"></td>
							</tr>
							<tr>
								<td>Date End</td>
								<td>:</td>
								<td><input type="Date" class="form-control"></td>
							</tr>
							<tr>
								<td>PIC Client</td>
								<td>:</td>
								<td><input type="text" class="form-control"></td>
							</tr>
							<tr>
								<td>PIC Trans</td>
								<td>:</td>
								<td><input type="text" class="form-control"></td>
							</tr>
						</table>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" style="left:0px" data-dismiss="modal">Tambah</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
							
		<nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgba(255,255,255,1); border-bottom:0px">
			<div class="col-sm-8 navbar-header">
				<a class="navbar-brand abcd" href="#" style="margin-top:20px; font-family:Josefin Sans;">APP MAINTENANCE</a>
			</div>
			<div class="col-sm-2 navbar-header" style="">
				<a class="navbar-brand abcd" href="#" style="font-size:20px; margin-left:180px; margin-top:20px; font-family:Josefin Sans;"><?php echo $_SESSION['user']['user_name']; ?></a>
			</div>
			<div class="col-sm-2 navbar-header" style="">
				<a class="navbar-brand abcd" href="logout.php" style="font-size:20px; margin-top:20px; margin-left:20px; font-family:Josefin Sans;">| Log Out</a>
			</div>
			<div class="collapse navbar-collapse abc" style="margin-top:20px;" id="myNavbar">
			</div>
		</nav>
		<div class="container">
		<p style="margin-top:100px; font-family:forum; font-size:25px;">List Of Application</p>
		<table class="table table-striped table-condensed table-hover" style="margin-top:50px;">
			<thead style="background-color:#e3e3e3;">
				<tr>
					<td>NO</td>
					<td>Date Start</td>
					<td>Date End</td>
					<td>PIC Client</td>
					<td>PIC Trans</td>	
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Date Start</td>
					<td>Date End</td>
					<td>PIC Client</td>
					<td>PIC Trans</td>
					<td><a href="table.php">go</a></td>
				</tr>
			</tbody>
		</table>
		</div>
</body>
</html>
</html>