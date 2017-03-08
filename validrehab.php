

<?php


	session_start();




?>





<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>2 Column Layout &mdash; Left Menu</title>
		<style type="text/css">
		
			body{
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}
			
			#nav {
				float: left;
				width: 230px;
				margin-left: -100%;
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				background: #eee;
			}
			
			#wrapper {
				overflow: hidden;
			}
			
			#content {
				margin-left: 230px; /* Same as 'nav' width */
			}
			
			.innertube{
				margin: 15px; /* Padding for content */
				margin-top: 0;
			}
			
			p {
				color: #555;
			}
	
			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			
			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}
	
		</style>
		
		
	
	</head>
	
	<body background="i2.jpg">
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1 style="color: white">Validated Rehabilitation Centres </h1><br>
						<section class="wrapper" style="background-color: rgba(201, 201, 201, 0.39); height: 500px;width: 900px;padding: 20px;border-radius: 10px;">
									
								<?php

$connect= mysqli_connect("localhost","root","") or die('error');
	
	$db =@mysqli_select_db($connect,'csuser') or die ('error');

	$checkquery= "SELECT * FROM rehab WHERE validate='yes'";
	
	$executequery=mysqli_query($connect,$checkquery) or die(mysqli_errno($connect));
	$numrows=mysqli_num_rows($executequery);





	while($row =mysqli_fetch_assoc($executequery))
      $cartsolutions[] = $row;


 
  	
  	



  		echo" <table  style='border-spacing:40px ; border-collapse: separate;border:solid;border:5px solid black;'><tr><th>email</th><th>location</th><th>capacity</th><th>description</th><th>Supported By NGO</th><th>Phone No.</th></tr>";


	for($i=0;$i<$numrows;$i++){

		 $email1= $cartsolutions[$i]['email'];

  	$checkquery= "SELECT * FROM userdata WHERE email='$email1'";
  	$executequery=mysqli_query($connect,$checkquery) or die(mysqli_errno($connect));
  	while($row1 =mysqli_fetch_assoc($executequery))
      $cartsolutions1[] = $row1;


		echo "<tr><td>".$cartsolutions[$i]['email']."</td><td>".$cartsolutions[$i]['location']."</td><td>".$cartsolutions[$i]['capacity']."</td><td>".$cartsolutions[$i]['description']."</td><td style='position:relative; left:40px;'>".$cartsolutions[$i]['ngo']."</td><td>".$cartsolutions1[$i]['phone']."


		<td></tr>";

		
		


		

	}


echo "</table>";

?>














						</section>
					</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="innertube" style="height: 600px;">
				
					<h3 style="background-color: rgba(201, 201, 201, 0.55); padding: 20px;">Disaster</h3>
					<ul>
					<br>
						<li><a href="index.php">Home</a></li><br>
						<li><a href="#">Transaction History</a></li><br>
						<li><a href="#">Donate</a></li><br>
						<li><a href="#">Rehab setup</a></li><br>
						<li><a href="#">Add Missing people</a></li><br>
						<li><a href="page4.php">Logout</a></li>
					</ul>
					
			</nav>
			
		</div>
	</body>
</html>
