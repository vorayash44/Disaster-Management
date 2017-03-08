<?php
session_start();

$id= $_GET['id'];

echo "aaayyyy naa <br>";
	$connect= mysqli_connect("localhost","root","") or die('error');
	
	$db =@mysqli_select_db($connect,'csuser') or die ('error');
$query="UPDATE rehab SET validate='yes' WHERE id='$id'";
							//echo $query;
							$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));



?>