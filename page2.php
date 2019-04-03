<!DOCTYPE html>
<html lang="en" class="bx--body">

<head>
  <meta charset="UTF-8">
  <title>St. Mary's</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://unpkg.com/carbon-components@latest/css/carbon-components.css'>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="css/pg2.css">  
  <script  src="js/pg2.js"></script>
  
</head>

<body>

<div class="rectangle"></div>

</body>
<div class="titleInfo">
	<h1>St. Mary's Historical District</h1>
</div>
<p>
The St. Mary’s Historic District lies just southeast of the Centennial Historic District. As Lafayette expanded to the north, the St. Mary’s area became a popular place to live for the city’s wealthier citizens, especially along Columbia Street district’s primary thoroughfare. 
<br>
<br>
In 1864 St. Mary’s Catholic Church relocated from Fifth and Brown Streets to Columbia Street. The church was constructed on the site of the former County Seminary. When the church moved so did many members of the congregation so the St. Mary’s became both a religious and social center for the neighborhood. 
<br>
<br>
Many of the the homes date from the 1860s and 1870s and include fine examples of the Italianate, Greek Revival and Queen Anne styles as well as vernacular house types. Most of the people who built their homes in this area were Lafayette businessmen. The Greek Revival house (31005) at 1202 Columbia Street was built in 1862 by James Ball , a local wholesale grocer, whose name remains stamped into the front steps. Across the street from the Ball house is the James H. Ward House (31004). Mr. Ward was actively involved with his brother, William, in a local carpet and wallpaper business. 
<br>
<br>
The James Murdock House (31026) also located on Columbia Street was constructed c.1890. Mr. Murdock moved into the house in approximately 1891 after leaving his post as warden of the prison at Michigan City. He was also active in Lafayette as the operator of a grocery and produce business and in bridge and road construction. The home was later sold to Ferdinand Dryfus who, together with his brother Leopold, managed the Dryfus Packing and Provision Company.</p>
<h2 style="text-align:center;">Ranking System</h2>
	
<!-- Rating starts here !-->
<div class="bx--grid">
		<div class="bx--row">
			<div id='outstanding' class="bx--col-sm-6 bx--col-xs-12">
				<a data-tile="clickable" class="bx--tile bx--tile--clickable">
					<div class="bx--tile__left-content">
						<img src="https://static.thenounproject.com/png/223577-200.png" />
					</div>
					<div class="bx--tile__right-content">
						
						<h2 id="test1">Outstanding (O)</h2>
						<p2>Property has enough historic or architectural significance that it is already listed m or should be considered for individual listing.</p2>
					</div>
				</a>
			</div>
			<div id='notable' class="bx--col-sm-6 bx--col-xs-12">
				<a data-tile="clickable" class="bx--tile bx--tile--clickable">
					<div class="bx--tile__left-content">
						<img src="https://static.thenounproject.com/png/426772-200.png" />
					</div>
					<div class="bx--tile__right-content">
						<h2>Notable (N)</h2>
						<p2>Property did not quite merit an :Outstanding: rating, but still is above average in its importance.</p2>
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- space !-->
	<div class="bx--grid">
		<div class="bx--row">
			<div id='contributing' class="bx--col-sm-6 bx--col-xs-12">
				<a data-tile="clickable" class="bx--tile bx--tile--clickable">
					<div class="bx--tile__left-content">
						<img src="https://static.thenounproject.com/png/38699-200.png" />
					</div>
					<div class="bx--tile__right-content">
						<h2>Contributing (C)</h2>
						<p2>Properties meeting the basic inventory criterion of being pre-1940, but that are not important enough to stand on their own as individually.</p2>
					</div>
				</a>
			</div>
			<div id='noncontributing' class="bx--col-sm-6 bx--col-xs-12">
				<a data-tile="clickable" class="bx--tile bx--tile--clickable">
					<div class="bx--tile__left-content">
						<img src="https://png.pngtree.com/svg/20170519/outstanding_order_60980.png" />
					</div>
					<div class="bx--tile__right-content">
						<h2>Non-Contributing (NC)</h2>
						<p2>Such properties are usually either post-1940 or they are older structures that have been badly altered and have lost historic character or they are otherwise incompatible with their historical surroundings.</p2>
					</div>
				</a>
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
          <h5 class="text-uppercase font-weight-bold" id="footerTextTitle">Contact Us</h5>
          <h6 class="font-weight-normal" id="footerText">Phone: 765-807-1000</h6>
          <h6 class="font-weight-normal" id="footerText">Email: jcollier@lafayette.in.gov</h6>
          <h6 class="font-weight-normal" id="footerText">Address: 20 N 6th Street Lafayette, IN 47901</h6>
    	  <h6 class="font-weight-normal" id="footerText">Website:<a id="footerText" href="https://www.lafayette.in.gov/187/Economic-Development" target="_blank"> Lafayette Economic Association</a></h6>

          
        </div>
    <!-- Footer Text -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://engineering.purdue.edu/EPICS" id="footerText" target="_blank"> Purdue EPICS</a>
    </div>
    <!-- Copyright -->
</footer>
  <!-- Footer -->
	<?php
		if(isset($_POST['submit'])){
		$ranking=$_POST["ranking"];
	}

	?>

		<form id="notableForm" action="page-three.php" method="post">
		<input id="notableSubmit" type="submit" value="Notable">
		<input type="hidden" name="ranking" value="Notable">
		</form>

		<form id="outstandingForm" action="page-three.php" method="post">
		<input id="outstandingSubmit" type="submit" value="Outstanding">
		<input type="hidden" name="ranking" value="Outstanding">
		</form>

		<form id="contributingForm" action="page-three.php" method="post">
		<input id="contributingSubmit" type="submit" value="Contributing">
		<input type="hidden" name="ranking" value="Contributing">
		</form>
		
		<form id="nonContributingForm" action="page-three.php" method="post">
		<input id="nonContributingSubmit" type="submit" value="Non-Contributing">
		<input type="hidden" name="ranking" value="Non-Contributing">
		</form>						



  <script src='https://unpkg.com/carbon-components@latest/scripts/carbon-components.js'></script>

  






</body>

</html>
