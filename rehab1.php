<?php

		session_start();




		$connect=@mysqli_connect('localhost','root','') ;
	$db =@mysqli_select_db($connect,'csuser');

$email = $_SESSION['lemail'];
$location= $_POST['location'];
$capacity= $_POST['capacity'];
$description= $_POST['description'];
$ngo= $_POST['ngo'];
$query="INSERT INTO rehab (email,location,capacity,description,ngo) VALUES ('$email','$location','$capacity','$description','$ngo')";
							//echo $query;
							$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));


								echo '<script type="text/javascript">window.location="profile.php";</script>';

?>