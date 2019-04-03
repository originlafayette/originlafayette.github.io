<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>HomePage</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mainpage.css">

</head>


<body>
	<div class="titleInfo">
		<h1>Origin of Lafayette</h1>
  			<div class="hr-sect">
  				The Lafayette Economic Association
  			</div>
	</div>
	
	<div class="notifications">
		<div class="inside">
			<!-- notification message -->
			<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3 align="center">
						<?php 
							echo $_SESSION['success']; 
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
		</div>
	</div>
	<!-- logged in user information -->
	<?php  if (isset($_SESSION['username'])) : ?>
		<h4 align="center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h4>
	<?php endif ?>

	<div class="contentAdmin">
		<div class="buttons btn-group-vertical btn-group-lg" role="group" aria-label="Button group with nested dropdown">
			<button OnClick='location.href="indexAdmin.php?logout=1"' class = "btn btn-info">Logout</button>
		  	<div class="btn-group btn-group-lg" role="group">
			    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Admin Options
			    </button>
			    <div class="dropdown-menu btn-group-lg" aria-labelledby="btnGroupDrop1">
					<button class = "btn btn-info" onclick=" window.open('buildingForm.html', '_blank'); return false;">Add Building</button>
					<button type="button" class ="btn btn-info" data-toggle='modal' data-target='.bd-example-modal-lg'>Manage Building Information</button>
			    </div>
		  	</div>
		</div>

	</div>


<div class="elements">

	<div class = "img-container">
		<img src="images/Lafayettemap.jpg" alt="Map of Lafayatte" usemap="#lafayettemap" width="384" height="685" class="map" />
		<map name = "lafayettemap"/>
			<area shape="circle" coords="57,253,8" alt="St Mary District" href="">
			<area shape="circle" coords="145,262,8" alt="St Mary District" href="">
			<area shape="circle" coords="111,169,8" alt="St Mary District" href="">
			<area shape="circle" coords="192,185,8" alt="St Mary District" href="">
			<area shape="circle" coords="178,102,8" alt="St Mary District" href="">
			<area shape="circle" coords="243,290,8" alt="St Mary District" href="">
			<area shape="poly" id="green" rel="red,blue" href="#" coords="209,273,265,270,273,273,280,277,291,281,295,286,297,297,282,300,276,300,266,300,255,300,242,300,231,299,219,299,213,299,205,298,204,286,204,277" shape="poly">
		</map>
	</div>
	
	<div class = "table-placement">
		<table>
		<tr>
			<th>District list</th>
		</tr>
		<tr>
			<td><a id="downtown" href="webpage" target="_blank">Downtown</a></td>
		</tr>
		<tr>
			<td><a id="uppermain" href="webpage" target="_blank">Upper Main</a></td>
		</tr>
		<tr>
			<td><a id="centennial" href="webpage" target="_blank">Centennial</a></td>
		</tr>
		<tr>
			<td><a id="oldjefferson" href="webpage" target="_blank">Old Jefferson</a></td>
		</tr>
		<tr>
			<td><a id="parkmarry" href="webpage" target="_blank">Park Mary</a></td>
		</tr>
		<tr>
			<td><a id="stmary" href="page2.php" target="_blank">St.Mary</a></td>
		</tr>
		<tr>
			<td><a id="ninthsthill" href="webpage" target="_blank">Ninth St.Hill</a></td>
		</tr>
		<tr>
			<td><a id="ellsworth" href="webpage" target="_blank">Ellsworth</a></td>
		</tr>
		<tr>
			<td><a id="highlandpaer" href="webpage" target="_blank">Highland Paer</a></td>
		</tr>
		<tr>
			<td><a id="perrin" href="webpage" target="_blank">Perrin</a></td>
		</tr>
	</table>

</div>



    <!-- Modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-body">
					<form class="contact100-form validate-form" action="databaseManageAdmin.php" method="post">
						<span class="contact100-form-title">
							Select District to View
						</span>

						<div class="wrap-input100 input100-select bg1">
							<span class="label-input100">Select National Historic District *</span>
							<div>
								<select class="js-select2" name="district">
									<option>Please chooses</option>
									<option>Downtown</option>
									<option>Upper Main</option>
									<option>Centennial</option>
									<option>Old Jefferson</option>
									<option>Park Mary</option>
									<option>St. Mary</option>
									<option>Ninth St. Hill</option>
									<option>Ellsworth</option>
									<option>Highland Park</option>
									<option>Perrin</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
						</div>
						
						<div class="container-contact100-form-btn">
							<button class="contact100-form-btn">
								<span>
									Submit
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</form>
	      </div>
	    </div>
	  </div>
	</div>

<br>
<br>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">
    <!-- Footer Text -->
        <!-- Grid column -->
        <div class="col-md-12">
          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Contact Us</h5>
          <h6 class="font-weight-normal">Phone: 765-807-1000</h6>
          <h6 class="font-weight-normal">Email: jcollier@lafayette.in.gov</h6>
          <h6 class="font-weight-normal">Address: 20 N 6th Street Lafayette, IN 47901</h6>
    	  <h6 class="font-weight-normal">Website:<a id="footerText" href="https://www.lafayette.in.gov/187/Economic-Development" target="_blank"> Lafayette Economic Association</a></h6>
        </div>
    <!-- Footer Text -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://engineering.purdue.edu/EPICS" id="footerText" target="_blank"> Purdue EPICS</a>
    </div>
    <!-- Copyright -->
</footer>
  <!-- Footer -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/indexAdmin.js"></script>
</body>
</html>