<!doctype html>
<html lang="en" class="bx--body">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Origin of Lafayette</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/pg3.css"> 


</head>


<body>
	<div class="rectangle"></div>
	<div id="titleInfo">
	<h1 id="pageTitle">St. Mary's Historical District</h1>
	</div>
	
	<figure>
		<img id="districtMap" src="images/stMarysMap.jpg">
		<figcaption>District Map based on Site Numbers</figcaption>
	</figure>
	<br>
	<br>
	<br>
	<br>
	
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
                    <th class="numbers"">Year of Construction</th>
                    <th class="text">Image</th>
                    <th class="text">Options</th>
                </tr>
            </thead>

            <tbody id="transactionTableBody">
                <!-- rows added using JS. Template used to speed up rendering-->
    


	<?php
	

	/*
	$con = mysqli_connect('127.0.0.1', 'root', 'epicsDisc1', 'buildingData');
	
	if(!$con)
	{
		echo 'Connection to database could not be established';
	} 
	#else {
	#	echo 'Established connection';
	#}

	if(!mysqli_select_db($con,'buildingData'))
	{
		echo 'Database not Selected';
	}
*/
	$con = mysqli_connect('128.46.154.25', 'epics_disc', 'TcbridxS');
/// For final version
	if(!mysqli_select_db($con,'epics_disc'))
	{
		echo 'Database not Selected';
	}
	# Add code for District (dropdown) and architect
/////
	$District = $_POST['district'];
	#echo $District;

	if ($District == "St. Mary") {
		$District = "St. Marys";
	}
	$sql = "SELECT * FROM buildingData WHERE District = '$District' ORDER BY SiteNumber";

	$results=mysqli_query($con,$sql);

	#echo $results; 
	
	if (mysqli_num_rows($results)>0) {
		while($row=mysqli_fetch_array($results)) {
			echo "<tr image_data='images/bldgImages/".$row['Images']."'>
					<td> <div class='row_data' col_name='SiteNumber'>". $row[1] ."</div></td>
				<td> <div class='row_data' edit_type='click' col_name='Name'>". $row[3] .
				"</div></td><td> <div class='row_data' edit_type='click' col_name='StreetAddress'>". $row[4] .
				"</div></td><td> <div class='row_data' edit_type='click' col_name='Location'>". $row[5] .
				"</div></td><td> <div class='row_data' edit_type='click' col_name='Ranking'>". $row[6] .
				"</div></td><td> <div class='row_data' edit_type='click' col_name='Architecture'>". $row[7] .
				"</div></td><td> <div class='row_data' edit_type='click' col_name='Year'>". $row[8] . 
				"</div></td><td> 
			<button type='button' class='btn btn-link' data-toggle='modal' id='button-view' data-target='.bd-example-modal-lg'> View </button>
			</td><td> <span class='btn_edit' > <a href='#'' class='btn btn-link'> Edit</a> </span>
				<span class='btn_save' > <a href='#'' class='btn btn-link'> Save</a> | </span> 
				<span class='btn_cancel'> <a href='#'' class='btn btn-link'> Cancel</a></span> </td><tr>";
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/indexAdmin.js"></script>
</body>

</html>