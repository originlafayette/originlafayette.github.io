<!DOCTYPE html>
<html lang="en">
<head>
	<title>Origin of Lafayette</title>
	<meta charset="UTF-8">
</head>
<body>

	<?php
		if(isset($_POST['submit'])){
		$ranking=$_POST["ranking"];
	}

	?>
	<form action="page-three.php" method="post">
		<input type="submit" value="Outstanding">
		<!--<a href="page-three.php" type="submit">Outstanding</a>-->
		<input type="hidden" name="ranking" value="Outstanding">
	</form>

	<br/>
	<form action="page-three.php" method="post">
		<input type="submit" value="Contributing">
		<!--<a href="page-three.php" type="submit">Outstanding</a>-->
		<input type="hidden" name="ranking" value="Contributing">
	</form>
</body>

</html>