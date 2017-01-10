<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Maintenance Application</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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
}

.bg-depan {
	background:url('img/bg-depan.png');
	background-size: 100% 100%;
	padding-bottom:40px;
	background-repeat:no-repeat;
	width:100%;
}
.bodi{
 padding-top:70px;
}
.jumbotron {
	background-color:rgba(0,0,0,0);
}

.jumbotron h1 {
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
							<h1>Maintenance Service</h1>
							<div class="form">

						    <ul class="tab-group">
						      <li class="tab active"><a href="#req">Request</a></li>
						    </ul>

						      <div class="tab-content">
						        <div id="req">
						          <h1>Silahkan masukkan data</h1>

						          <form action="/" method="post">

						          <div class="top-row">
						            <div class="field-wrap">
						              <label style="-webkit-transform: translateY(50px); transform: translateY(50px); left: 2px; font-size: 14px; color:white;">
						                Date Start<span class="req">*</span>
						              </label>
						              <input type="date" required autocomplete="off" value="" />
						            </div>

						            <div class="field-wrap">
						              <label style="-webkit-transform: translateY(50px); transform: translateY(50px); left: 2px; font-size: 14px; color:white;">
						                Date End<span class="req">*</span>
						              </label>
						              <input type="date"required autocomplete="off" value=""/>
						            </div>
						          </div>

						          <div class="field-wrap">
						            <label>
						              Pic Client<span class="req">*</span>
						            </label>
						            <input type="text"required autocomplete="off"/>
						          </div>

						          <div class="field-wrap">
						            <label>
						              PIC Trans<span class="req">*</span>
						            </label>
						            <input type="text"required autocomplete="off"/>
						          </div>

											<div class="field-wrap">
						            <label>
						              Question<span class="req">*</span>
						            </label>
						            <input type="text"required autocomplete="off"/>
						          </div>
										<div class="question">
											<div class="field-wrap">
						            <label>
						              Question<span class="req">*</span>
						            </label>
						            <input type="text"required autocomplete="off"/>
						          </div>
											<div class="field-wrap">
												<label>
													Question<span class="req">*</span>
												</label>
												<input type="text"required autocomplete="off"/>
											</div>

											<div class="field-wrap">
												<label>
													Question<span class="req">*</span>
												</label>
												<input type="text"required autocomplete="off"/>
											</div>
											<div class="field-wrap">
						            <label>
						              Question<span class="req">*</span>
						            </label>
						            <input type="text"required autocomplete="off"/>
						          </div>
										</div>
						          <button type="submit" class="button button-block"/>Get Started</button>
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
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/index.js"></script>
</body>
</html>
