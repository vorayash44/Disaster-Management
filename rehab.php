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
						<h1 style="color: white">Rehab SetUp </h1><br>
						<section class="wrapper" style="background-color: rgba(201, 201, 201, 0.39); height: 400px;padding: 20px;border-radius: 10px;">
									<form action="rehab1.php" method="POST" style="font-size: 20px;">
												<b>Location </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="location" style="height: 20px;border-radius: 10px;"><br><br>
												<b>Capacity</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="capacity" style="height: 20px;border-radius: 10px;"><br><br>
												<b>Description &nbsp</b> <input type="text" name="description" style="height: 60px;width:700px;border-radius: 10px;"><br><br>
												<b>Are you a NGO </b>
												 <input type="radio" name="ngo" value="yes"> Yes
												  <input type="radio" name="ngo" value="no"> No


<br><br>
												  		<button type="submit" style="position: relative;left: 70%;">SIGNUP</button>



									</form>
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
						<li><a href="profile.php">Profile</a></li><br>
						<li><a href="history.php">Transaction History</a></li><br>
						<li><a href="ngoselect.php">Donate</a></li><br>
						<li><a href="rehab.php">Rehab setup</a></li><br>
						<li><a href="addmissing.php">Add Missing people</a></li><br>
						<li><a href="searchmissing.php">Search Missing people</a></li><br>
						<li><a href="page4.php">Logout</a></li>
					</ul>
					
			</nav>
			
		</div>
	</body>
</html>