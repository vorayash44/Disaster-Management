<?php

	session_start();

		if(!isset($_SESSION['lemail'])){
			echo '<script type="text/javascript">alert("Sorry Please login and then try");</script>';
				echo '<script type="text/javascript">window.location="index.php";</script>';
		}

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
		
		<script type="text/javascript" src="table_script.js"></script>
		
	
	</head>
	
	<body background="i2.jpg">
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1 style="color: white">Add Missing People</h1><br>
						<section class="wrapper" style="background-color: rgba(201, 201, 201, 0.39); height: 400px;padding: 20px;border-radius: 10px;">
												

					
									<center>Name <input type="text" id="name" ><br><br>
									Location  <input type="text" id="location"><br><br>
									Description <input type="text" id="description"><br><br>	  		

										<button name="submit" id="submit" value="submit" onclick="done();">Submit</button></center>

									
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


<script>

function done(){

  var name= document.getElementById("name").value;
  var location= document.getElementById("location").value;
  var description= document.getElementById("description").value;
 // document.getElementById("enter1").value=comment;
 console.log(name);
  console.log(location);
   console.log(description);

  // document.write(comment); 
 //alert(id);
 // var elements = document.getElementsByName(id);

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {

     // document.getElementById(id).innerHTML="Validated";
      console.log("andar aaya");
    }
  }
  xmlhttp.open("GET","done.php?name="+name+"&location="+location+"&description="+description,true);
  xmlhttp.send();



}











/*

	<div id="wrapper">
						<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1>
						<tr>
						<th>Name of the Missing Person</th>
						<th>Present Location</th>
						<th>Description</th>

						</tr>


						<tr>
						<td><input type="text" id="new_name"></td>
						<td><input type="text" id="new_country"></td>
						<td><input type="text" id="new_age"></td>

						<td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
						</tr>

						</table>
						</div>
*/



</script>

</html>
















