<?php

session_start();

// jika sudah login, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
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
  <script src="js/index.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Coda|Josefin+Sans|Poiret+One" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<style>
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
}

body {
  background: #c1bdba;
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}

.form {

  background: rgba(19, 35, 47, 0.3);
  padding: 40px;
  width: 40%;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 100%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: block;
}

.question{

}

h1 {
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}

label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  max-height: 1000px;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}


*{
	margin:0px;
	padding:0px;
}

body {
	background:url('img/bg.png');
	background-size:100% 100%;
	background-attachment:fixed;
}

.v {
	line-height:50px;
	vertical-align: center;
}

.abc ul li:hover {
	transition:0.5s all ease;
	background-color:rgba(0,0,0,0.2);
	color:red;
}

.abc ul li a:hover {
	transition:0.5s all ease;
	background-color:rgba(0,0,0,0.5);
	color:white;
}


.welcome {
	width:100%;
	margin-top:150px;
}

.gir{
	background:url('img/gir.png');

	background-repeat:no-repeat;
	width:100%;
	height:900px;
	position:relative;
}

.bg-depan {
	background:url('img/bg-depan.png');
	background-size: 100% 100%;
	background-repeat:no-repeat;
	background-attachment:absolute;
	height:100%;
	width:100%;
}
.bodi{
 padding-top:70px;
}
.jumbotron {
	background-color:rgba(0,0,0,0);
}

.jumbotron h2 {
	font-family:CF Spaceship;
	text-align: center;
	color:white;
}

.jumbotron p {
	font-family:CF Spaceship;
	color:white;
}

.footer {
	background:#2c2c2c;
	border-top:solid 10px;
	border-top-color:#545454;
	width:100%;
	height:300px;
}

#login h3 {
	font-family:josefin sans;
	color:white;
	text-align:center;
}

</style>
<body>

		<nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgba(255,255,255,1); border-bottom:0px">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand abcd" href="#" style="margin-top:20px; font-family:axia;">APP MAINTENANCE</a>
			</div>
			<div class="collapse navbar-collapse abc" style="margin-top:20px;" id="myNavbar">
				<ul class="nav navbar-nav navbar-right" style="font-family:DINCond-Regular; font-size:20px;">
					<li style="padding-bottom:3px;"><a href="#">Home</a></li>
					<li style="padding-bottom:3px;"><a href="#">Request</a></li>
					<li style="padding-bottom:3px;"><a href="#">Our Contact</a></li>
					<li style="padding-bottom:3px;"><a href="#">About Us</a></li>
					<li><a href="#" style="margin-right:30px;"><span class="glyphicon glyphicon-Log-in"></span> &nbsp Log In</a></li>
				</ul>
			</div>
		</nav>



				<div class="bodi">
				<div class="gir">
					<div class="bg-depan">
						<div class="jumbotron">
							<h2 style="font-family:poiret one;">Maintenance Service</h2>
							<div class="form"><!-- Form Login -->
									<ul class="tab-group">
										<li class="tab active"><a href="#login">Log in</a></li>
									</ul>

									<div class="tab-content">
										<div id="login">
											<form method="post" action="login-proses.php">
												<div class="field-wrap">
												<label>
													Username<span class="req">*</span>
												</label>
												<input type="text" name="username" required autocomplete="off"/>
											</div>

											<div class="field-wrap">
												<label>
													Password<span class="req">*</span>
												</label>
												<input type="password" name="password" required autocomplete="off"/>
											</div>

											<p class="forgot"><a href="#">Forgot Password?</a></p>

												<button type="submit" class="button button-block"/>Log In</button>
											</form>

										</div>



									</div><!-- tab-content -->

						</div> <!-- /form -->
						</div>
					</div>
				</div>
		</div>
		<div class="footer">

		</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			<script src="js/index.js"></script>
</body>
</html>
