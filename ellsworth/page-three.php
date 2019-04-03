<!doctype html>
<html lang="en" class="bx--body">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Ellsworth</title>
	<link rel="icon" type="image/png" href="../images/icons/favicon (3).ico"/>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

 	<link rel="stylesheet" href="../css/pg3.css"> 
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/mainpage2.css">
	<link rel="stylesheet" type="text/css" href="../css/final.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="titleDiv">
		<div class="container">
			<div class="title">Ellsworth Historical District</div>
			<div class="button">
				<button OnClick='location.href="index.php"'>Back</button>
			</div>
			<div class="button">
				<div class="dropdown">
					<button class="dropbtn dropdown-toggle" style="padding: 8px 0px;width:100%;">Districts</button>
					<div class="dropdown-content">
						<a id="downtowndrop" href="../downtown">Downtown</a>
						<a id="uppermaindrop" href="../uppermain/">Upper Main</a>
						<a id="centennialdrop" href="../centennial/">Centennial</a>
						<a id="oldjeffersondrop" href="../oldjefferson/">Old Jefferson</a>
						<a id="parkmarrydrop" href="../parkmary/">Park Mary</a>
						<a id="stmarydrop" href="../stmary/">St. Mary</a>
						<a id="ninthsthilldrop" href="../ninthhill/">Ninth St. Hill</a>
						<a id="ellsworthdrop" href="../ellsworth/">Ellsworth</a>
						<a id="highlandpaerdrop" href="../highlandpark">Highland Park</a>
						<a id="perrindrop" href="../perrin/">Perin</a>
 					</div>
				</div>
			</div>
		</div>
	</div>
	
	<figure>
		<img id="districtMap" src="../images/stMarysMap.jpg">
		<figcaption>District Map based on Site Numbers</figcaption>
	</figure>
	<div id="darkenBackground"></div>
    
    <!-- Table Content -->
    <div id="buildingDataWrapper">
        <h1 id="tableTitle"> <?php $Ranking = $_POST['ranking'];
        echo $Ranking?> Building Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="numbers" onclick="sortTable(0)">Site Number</th>
                    <th class="text">Building Name</th>
                    <th class="numbers">Street Address</th>
                    <th class="text">Location</th>
                    <th class="text">Ranking</th>
                    <th class="text">Architecture</th>
                    <th class="numbers">Year of Construction</th>
                    <th class="text">Image</th>
                </tr>
            </thead>

            <tbody id="transactionTableBody">
	<?php

	$con = mysqli_connect('128.46.154.25', 'epics_disc', 'TcbridxS');

	if(!mysqli_select_db($con,'epics_disc')) {
		echo 'Database not Selected';
	}

	$Ranking = $_POST['ranking'];

	if ($Ranking == "Outstanding") {
		$Ranking = 'Outstanding (O)';
	} elseif ($Ranking == "Notable") {
		$Ranking = 'Notable (N)';
	} elseif ($Ranking == "Contributing") {
		$Ranking = 'Contributing (C)';
	} elseif ($Ranking == "Non-Contributing") {
		$Ranking = 'Non-Contributing (NC)';
	}

	$sql = "SELECT * FROM buildingData WHERE Ranking = '$Ranking' and District = 'Ellsworth' ORDER BY SiteNumber";

	if ($Ranking == "All") {
		$sql = "SELECT * FROM buildingData WHERE District = 'Ellsworth' ORDER BY SiteNumber";
	}

	$results=mysqli_query($con,$sql);
	
	if (mysqli_num_rows($results)>0) {
		while($row=mysqli_fetch_array($results)) {
			echo "<tr image_data='../images/bldgImages/".$row['Images']."'><td> <div class='row_data'>". $row[1] .
				"</div></td><td> <div class='row_data'>". $row[3] .
				"</div></td><td> <div class='row_data'>". $row[4] .
				"</div></td><td> <div class='row_data'>". $row[5] .
				"</div></td><td> <div class='row_data'>". $row[6] .
				"</div></td><td> <div class='row_data'>". $row[7] .
				"</div></td><td> <div class='row_data'>". $row[8] . 
				"</div></td><td> 
			<button type='button' class='btn btn-link' data-toggle='modal' id='button-view' data-target='.bd-example-modal-lg'> View </button>
			</td></tr>";
		}
	}
	
	mysqli_close($con);
	?>

            </tbody>
        </table>
    </div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Building Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<img class="col-6 col-md-6" id="modalImage"  src="images/stMarysMap.jpg">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br>
<br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 	<script src="js/pg3.js"></script>
</body>
</html>