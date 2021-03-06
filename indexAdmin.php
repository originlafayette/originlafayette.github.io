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
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>HomePage</title>
	<link rel="icon" type="image/png" href="images/icons/favicon (3).ico"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mainpage2.css">
	<link rel="stylesheet" type="text/css" href="css/final.css">

</head>
<body>
	<div class="titleDiv">
		<div class="container">
			<div class="title">Origin of Lafayette</div>
			<div class="button">
				<button OnClick='location.href="index.html"'>Logout</button>
			</div>
			<div class="button">
				<div class="dropdown">
					<button class="dropbtn dropdown-toggle" style="padding: 8px 0px;width:100%;">About</button>
					<div class="dropdown-content">
						<a id="uppermaindrop" href="TippecanoeHistory.php">Tippecanoe County History</a>
						<a id="uppermaindrop" href="RatingSystem.php">Rating System</a>
 					</div>
				</div>
			</div>
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

	<div class="allButtons">
		<button class="addBuildingButton" OnClick='location.href="buildingForm.html"'>Add Building</button>
		<button class="manageBuildingButton" data-toggle='modal' data-target='.bd-example-modal-lg'>Manage Building</button>
	</div>
	<!-- onclick="window.open('buildingForm.html','_blank');" -->
<!-- 
	<div class="contentAdmin">
		<div class="buttons btn-group-vertical btn-group-lg" role="group" aria-label="Button group with nested dropdown">
			<button class = "btn btn-info" onclick=" window.open('buildingForm.html', '_blank'); return false;">Add Building</button>
			<button type="button" class ="btn btn-info" data-toggle='modal' data-target='.bd-example-modal-lg'>Manage Building</button>
		</div>
	</div> -->


	<div class="container holder">
		<div class="img_container">
			<img src="images/Lafayettemap2.jpg" width="342px" height="549px" usemap="#image-map">
			<map name="image-map">
				<area target="" alt="1) Downtown" title="1) Downtown" href="downtown/" coords="48,174,66,175,67,182,106,181,107,217,98,217,98,225,87,224,87,218,69,218,67,229,38,229,38,197,48,198" shape="poly">
				<area target="" alt="2) Upper Main" title="2) Upper Main" href="uppermain/" coords="106,180,178,180,178,172,188,172,188,181,219,181,211,190,199,191,200,216,185,216,185,209,160,209,160,218,154,218,154,209,130,208,130,227,124,227,123,218,108,219,108,197" shape="poly">
				<area target="" alt="3) Centennial" title="3) Centennial" href="centennial/" coords="172,179,78,180,77,141,67,141,67,121,63,123,61,106,52,105,67,72,68,92,97,89,97,79,105,79,106,89,120,89,119,81,160,80,169,88" shape="poly">
				<area target="" alt="4) Old Jefferson" title="4) Old Jefferson" href="oldjefferson\" coords="171,103,183,103,183,92,199,93,200,81,230,81,230,89,244,89,247,121,254,122,218,180,192,180,186,176,185,169,178,170,177,173,172,173" shape="poly">
				<area target="" alt="5) Park Mary" title="5) Park Mary" href="parkmary\" coords="116,80,200,80,200,58,215,59,214,69,230,69,231,80,247,80,247,57,231,57,229,16,186,16,186,11,177,11,177,16,160,18,157,59,117,59" shape="poly">
				<area target="" alt="6) St. Mary" title="6) St. Mary" href="stmary" coords="202,210,202,237,305,238,286,218,267,210" shape="poly">
				<area target="" alt="7) Ninth St. Hill" title="7) Ninth St. Hill" href="ninthhill/" coords="144,316,144,322,164,322,166,352,161,353,161,384,156,386,155,392,185,392,186,354,195,354,195,361,203,361,203,369,215,370,216,385,231,385,230,393,244,393,252,385,236,371,240,368,228,359,223,363,216,355,220,350,202,334,209,324,190,305,188,259,173,257,173,252,163,258,164,295,159,295,160,303,155,304,153,315" shape="poly">
				<area target="" alt="8) Ellsworth" title="8) Ellsworth" href="ellsworth/" coords="120,237,120,229,141,229,141,219,186,219,188,251,170,251,163,256,163,281,159,282,157,295,143,296,143,310,119,311,113,317,119,332,110,335,106,327,88,344,87,311,79,310,79,278,87,277,88,291,94,292,94,287,99,287,99,266,108,266,108,256,141,256,141,238" shape="poly">
				<area target="" alt="9) Highland Park" title="9) Highland Park" href="highlandpark/" coords="101,396,176,395,179,513,152,519,127,519,91,516,91,500,108,500,107,478,101,481" shape="poly">
				<area target="" alt="10) Perrin" title="10) Perrin" href="perrin/" coords="222,181,267,117,276,120,294,111,303,101,303,81,327,79,327,133,311,141,308,169,328,170,328,188,300,186,299,194,306,199,305,218,298,219,298,228,289,220,288,205,272,199,268,210,242,202,242,208,235,208,233,191,237,191,237,180" shape="poly">
			</map>
		</div>
	
		<div class="table_placement">
			<table>
				<tr>
					<th>District List</th>
				</tr>
				<tr>
					<td><a id="downtown" href="downtown/">Downtown</a></td>
				</tr>
				<tr>
					<td><a id="uppermain" href="uppermain/">Upper Main</a></td>
				</tr>
				<tr>
					<td><a id="centennial" href="centennial/">Centennial</a></td>
				</tr>
				<tr>
					<td><a id="oldjefferson" href="oldjefferson/">Old Jefferson</a></td>
				</tr>
				<tr>
					<td><a id="parkmarry" href="parkmary/">Park Mary</a></td>
				</tr>
				<tr>
					<td><a id="stmary" href="stmary/">St.Mary</a></td>
				</tr>
				<tr>
					<td><a id="ninthsthill" href="ninthhill/">Ninth St.Hill</a></td>
				</tr>
				<tr>
					<td><a id="ellsworth" href="ellsworth/">Ellsworth</a></td>
				</tr>
				<tr>
					<td><a id="highlandpaer" href="highlandpark">Highland Park</a></td>
				</tr>
				<tr>
					<td><a id="perrin" href="perrin/">Perrin</a></td>
				</tr>
			</table>
		</div> 	
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
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
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