

<?php

session_start();

$name= $_GET['name'];
$location= $_GET['location'];
$description= $_GET['description'];
$email= $_SESSION['lemail'];

echo "aaayyyy naa <br>";
	$connect= mysqli_connect("localhost","root","") or die('error');
	
	$db =@mysqli_select_db($connect,'csuser') or die ('error');


$query="INSERT INTO missingperson (name,location,description,email) VALUES ('$name','$location','$description','$email')";
							//echo $query;
							$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));


							?>