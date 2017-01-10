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
	<link href="https://fonts.googleapis.com/css?family=Coda|Josefin+Sans|Poiret+One" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
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

.welcome {
	width:100%;
	margin-top:150px;
}

.gir{
	background:url('img/gir.png');
	background-repeat:no-repeat;
	height:512px;
	width:100%;
}

.bg-depan {
	background:url('img/bg-depan.png');
	background-repeat:no-repeat;
	background-attachment:absolute;
	background-size:100% 100%;
	height:500px;
	width:100%;
}

</style>
<body>

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
		
		
		
		<div class="welcome">
				<div class="gir">
					<div class="bg-depan">
						<table>
							<tr>
								<td>
									<div class="jumbotron">
									<h1 style="margin-left:5%;">Maintenance Service</h1>
									</div>
								</td>
								<td style="width:700px;">
									<div class="form-group" style="margin-left:4%; margin-right:1%;">
										<label for="select" style="font-size:15px; font-family:Coda; color:black;">Pilih Server :</label>
										<select class="form-control" id="select">
											<option>A</option>
											<option>B</option>
											<option>C</option>
											<option>D</option>
										</select>
										<a href="mt-list.php"><button type="button" class="btn btn-success">Pilih</button></a>
									</div>
								</td>
								<td><a href="#"><button type="button" class="btn btn-info j"><span class="glyphicon glyphicon-plus"></button></a><br><br></td>
							</tr>
						</table>
					</div>
				</div>
		</div>
		<div class="footer">
			
		</div>
</body>
</html>
</html>