<?php
	ob_start();
	$con = mysqli_connect('128.46.154.25', 'epics_disc', 'TcbridxS');

	//$con = mysqli_connect('127.0.0.1', 'root', 'epicsDisc1');  // For local host dev
	
	/*if(!$con)
	{
		echo 'Connection to database could not be established';
	}
	else {
		echo 'connected to database';
	}
	
/// To remove : Local host development
	if(!mysqli_select_db($con,'buildingData'))
	{
		echo 'Database not Selected';
	}
////
*/

/// For final version
	if(!mysqli_select_db($con,'epics_disc'))
	{
		echo 'Database not Selected';
	}
	# Add code for District (dropdown) and architect
/////

	$District = $_POST['district'];
	$Name = $_POST['buildingName'];
	$Site = $_POST['siteNumber'];
	$Location = $_POST['locationInfo'];
	$StreetAddress = $_POST['address'];
	$Rating = $_POST['rating'];
	$Year = $_POST['year'];
	$Architecture = $_POST['architecture'];


	$sql = "INSERT INTO buildingData(SiteNumber, District, Name, StreetAddress, Ranking, Architecture, Location, Year) VALUES ('$Site' ,'$District', '$Name', '$StreetAddress', '$Rating', '$Architecture', '$Location', '$Year');";


	if(!mysqli_query($con,$sql))
	{
		echo 'Not able to insert entry into databse';
	} 
	else {
		echo 'Entry succesfully inserted into database';
	}

	header('refresh:2; url=buildingForm.html');
	exit;
?>