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
						<h1 style="color: white">Final pay </h1><br>
						<section class="wrapper" style="background-color: rgba(201, 201, 201, 0.39); height: 400px;padding: 20px;border-radius: 10px;">
						<?php
							$ngoname= $_GET['ngoname'];
							echo "You are about to pay to $ngoname"
						?>
						<br><br>
									<form action="donatedb.php?<?php echo 'ngo='.$ngoname;?>" method="POST" style="font-size: 20px;">
												<center><b>Amount </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="amount"name="amount" style="height: 20px;border-radius: 10px;"><br><br>
												<b>Password</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="pwd1" style="height: 20px;border-radius: 10px;"><br><br></center>
												


<br><br>
												  		<button type="submit" style="position: relative;left: 45%;" onclick="PrintElem()" name="pay">PAY</button>



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
						<li><a href="#">Transaction History</a></li><br>
						<li><a href="#">Donate</a></li><br>
						<li><a href="#">Rehab setup</a></li><br>
						<li><a href="addmissing.php">Add Missing people</a></li><br>
						<li><a href="searchmissing.php">Search Missing people</a></li><br>
						<li><a href="page4.php">Logout</a></li>
					</ul>
					
			</nav>
			
		</div>
		<script type="text/javascript">
			
			function PrintElem()
    {
      var mywindow = window.open('', 'PRINT', 'height=400,width=600');


        mywindow.document.write('<html><head><title>' + document.title  + '</title>');

       
       var x=document.getElementById("amount").value;
       mywindow.document.write('</head><body >');
      mywindow.document.write('<h1>Tax Invoice</h1>');
      mywindow.document.write('<h1> name: <?php echo $_SESSION['lname']; ?> <?php echo $_SESSION['fname']; ?></h1>');

      mywindow.document.write('<p>amount donated:'+x);
        // mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;

        }

		</script>


	</body>
</html>