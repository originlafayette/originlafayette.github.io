<?php
	ob_start();
	
	$con = mysqli_connect('128.46.154.25', 'epics_disc', 'TcbridxS');
	$file = fopen("log.txt","a");
	//$con = mysqli_connect('127.0.0.1', 'root', 'epicsDisc1');  // For local host dev
	
	if(!$con)
	{
		$str = 'Connection to database could not be established';
		echo fwrite($file,$str);
	}
	else {
		$str = 'connected to database ';
		echo fwrite($file,$str);
	}
/*	
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
		$str2 = 'Database not Selected';
		echo fwrite($file,$str2);
	} else {
		$str = 'Selected :D ';
		echo fwrite($file,$str2);
	}
	# Add code for District (dropdown) and architect
/////


///// start here
	$SiteNumber  = $_POST['SiteNumber'];
   	$Name = $_POST['Name'];
   	$StreetAddress = $_POST['StreetAddress'];
   	$Location = $_POST['Location'];
   	$Ranking = $_POST['Ranking'];
   	$Architecture = $_POST['Architecture'];
   	$Year = $_POST['Year'];

	echo fwrite($file,$SiteNumber);
	echo fwrite($file,$Name);
	echo fwrite($file,$StreetAddress);
	echo fwrite($file,$Location);
	echo fwrite($file,$Ranking);
	echo fwrite($file,$Architecture);
	echo fwrite($file,$Year);


	$sql = "UPDATE buildingData SET Name='$Name', StreetAddress='$StreetAddress', Ranking='$Ranking', Architecture='$Architecture', Location='$Location', Year='$Year' WHERE SiteNumber='$SiteNumber';"; 

	echo fwrite($file,$sql);

	
	if(!mysqli_query($con,$sql))
	{
		$final =  'Not able to insert entry into databse';
			echo fwrite($file,$final);
	} 
	else {

		$final = 'Entry succesfully inserted into database';
			echo fwrite($file,$final);

	}
	fclose($file);
?>