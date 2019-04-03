<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="icon" type="image/png" href="images/icons/favicon (3).ico"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mainpage2.css">
	<link rel="stylesheet" type="text/css" href="css/final.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">

</head>
<body>
	<div class="titleDiv">
		<div class="container">
			<div class="title">Origin of Lafayette</div>
			<div class="button">
				<button OnClick='location.href="index.html"'>Home</button>
			</div>
		</div>
	</div>
	<!-- <div class="titleInfo">
		<h1>Origin of Lafayette</h1>
  			<div class="hr-sect">
  				The Lafayette Economic Association
  			</div>
  			<div class="button">
				<button OnClick='location.href="index.html"'>Home</button>
			</div>
	</div> -->

	<div class="header">
		<h2 style="font-size: 35px">Login</h2>
	</div>
	
	<form method="post" action="login.php" style="background-color: white; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 2px 2px 15px 10px;">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div style="display: inline-block" class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p style="font-size: 17px">
			Not a member yet? <a href="register.php" style="font-size: 17px; color: #5F9EA0">Sign up</a>
		</p>
	</form>

<footer class="page-footer font-small teal pt-4">
		<!-- Footer Text -->
				<!-- Grid column -->
				<div class="col-md-12">
					<!-- Content -->
					<h5 class="text-uppercase font-weight-bold" id="footerTextTitle">Contact Us</h5>
					<h6 class="font-weight-normal" id="footerText">Phone: 765-807-1000</h6>
					<h6 class="font-weight-normal" id="footerText">Email: jcollier@lafayette.in.gov</h6>
					<h6 class="font-weight-normal" id="footerText">Address: 20 N 6th Street Lafayette, IN 47901</h6>
				<h6 class="font-weight-normal" id="footerText">Website:<a id="footerText" href="https://www.lafayette.in.gov/187/Economic-Development" target="_blank"> Lafayette Economic Association</a></h6>

					
				</div>
		<!-- Footer Text -->
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"> © 2019 Copyright:
			<a href="https://engineering.purdue.edu/EPICS" id="footerText" target="_blank"> Purdue EPICS</a>
		</div>
		<!-- Copyright -->
</footer>
	<!-- Footer -->
</body>


</html>