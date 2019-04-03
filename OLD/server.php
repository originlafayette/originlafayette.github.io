<?php 
	session_start(); 

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('128.46.154.25', 'epics_disc', 'TcbridxS');
	if(!mysqli_select_db($db,'epics_disc'))
	{
		echo 'Database not Selected';
	}
	
	//LOCALHIOST
	//$db = mysqli_connect('127.0.0.1', 'root', 'epicsDisc1');
	// THIS STATEMENT WILL CHANGE ^^
	
	
	if(!$db	)
	{
		echo 'Connection to database could not be established';
	}

	
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		if (!empty($email) && strpos($email, 'lafayette.in.gov') == false) {
			array_push($errors, "You are not an authorized user");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1); //encrypt the password before saving in the database
			$query1 = "USE buildingData;";

			if(!mysqli_query($db,$query1))
			{
				echo 'Not able to select database';
				echo("Error description: " . mysqli_error($db));
			} 

			$query = "INSERT INTO users (userName, eMail, pwd) VALUES ('$username', '$email', '$password');";
			if(!mysqli_query($db,$query))
			{
				echo 'Not able to insert entry into databse';
				echo("Error description: " . mysqli_error($db));
			} 
			
			$_SESSION['username'] = $username;
			
			$_SESSION['success'] = "You are now logged in";
			header('location: indexAdmin.php');
		}

	}

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {

			$password = md5($password);
			$query1 = "USE buildingData;";
/*
			if(!mysqli_query($db,$query1))
			{
				echo 'Not able to select database';
				echo("Error description: " . mysqli_error($db));
			} 
*/
			$query = "SELECT * FROM users WHERE userName='$username' AND pwd='$password'";
			$results = mysqli_query($db, $query);
			if(!mysqli_query($db, $query)) {
					echo("Error description: " . mysqli_error($db));
			}

			if (mysqli_num_rows($results) == 1) {
				
				$_SESSION['username'] = $username;
				echo $_SESSION['username'];
				$_SESSION['success'] = "You are now logged in";
				header('location: indexAdmin.php');

			}else {
				array_push($errors, "Wrong username/password combination");

			}


		}
	}

?>