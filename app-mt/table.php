<?php  
	session_start();

	//jika belum login,aligkan ke form login
	if (empty($_SESSION['user'])) {
		header('Location: login.php');
		exit();
	}

?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Coda|Josefin+Sans|Poiret+One|Forum" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
		<nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgba(255,255,255,1); border-bottom:0px">
			<div class="col-sm-8 navbar-header">
				<a class="navbar-brand abcd" style="margin-top:20px; font-family:Josefin Sans;">APP MAINTENANCE</a>
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
		
		
		<button type="submit" class="btn btn-info" style="position:fixed; right:0px; bottom:0px; margin:10px"><span class="glyphicon glyphicon-floppy-save"></span> &nbsp Save</button>
		<a href="mt-list.php"<button type="button" class="btn btn-danger" style="position:fixed; left:0px; bottom:0px; margin:10px"><span class="glyphicon glyphicon-backward"></span> &nbsp Back</button></a>
		
		<form class="form-group" method="post" style="margin-top:60px;">
		<div class="header">
		<table class="table table-consended" style="background-color:#43c0db; margin-top:50px; max-width:80%; margin:20px auto;">
			<tbody class="font-head">
				<tr>
					<td><label for="">Date time Start</label><a style="text-align:right">:</a></td><td><input class="form-control" type="date" name="datestart" value=""/></td>
				</tr>
				<tr>
					<td><label for="">Date time End</label><a style="text-align:right">:</a></td><td><input class="form-control" type="date" name="dateend" value=""></td>
				</tr>
				<tr>
					<td><label for="">Server Name</label></td><a style="text-align:right">:</a><td><input class="form-control" type="text" name="servername" value=""></td>
				</tr>
				<tr>
					<td><label for="">PIC PT</label></td><a style="text-align:right">:</a><td><input class="form-control" type="text" name="dateend" value=""></td>
				</tr>
				<tr>
					<td><label for="">PIC PT.Transformatika</label><a style="text-align:right">:</a></td><td><input class="form-control" type="text" name="dateend" value=""></td>
				</tr>
				<tr>
					<td></td><td></td>
				</tr>
			</tbody>
      </table>
	  </div>
	  
	  <div class="container">
	  <table class="table table-striped" style="background-color:#edefef; margin-top:50px; text-align:center;"><!-- table Action -->

        <tr>
          <td colspan="7" class="sub">Picture In Server</td>
        </tr>
        <tr class="subcol">
          <td><img src="#" height="200"></td>
          <td><img src="#" height="200"></td>
          <td><img src="#" height="200"></td>
        </tr>

      </table>
      <table border="" class="table table-striped table-bordered table-hover" style="background-color:#edefef; margin-top:50px;"><!-- Checklist List -->
        <tr>
          <td colspan="7" class="sub">Checklist Agreed in Server</td>
        </tr>
        <tr class="subcol">
          <td>NO.</td>
          <td width="400">Activity Maintenance Description</td>
		  <td>Status</td>
          <td>Action Taken</td>
          <td>Remarks</td>
        </tr>
		<tr>
          <td>NO.</td>
          <td>Activity Maintenance Description</td>
		  <td>Status</td>
          <td>Action Taken</td>
          <td>Remarks</td>
        </tr>
      </table>
      </div>
    </form>
	
	
  </body>
</html>
