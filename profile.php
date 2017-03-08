
<?php

session_start();
if(!isset($_SESSION['lemail'])){
			echo '<script type="text/javascript">alert("Sorry Please login and then try");</script>';
				echo '<script type="text/javascript">window.location="index.php";</script>';
		}



	$connect=@mysqli_connect('localhost','root','') ;
	$db =@mysqli_select_db($connect,'csuser');

	$email= $_SESSION['lemail'];
// echo $_SESSION['lemail']."  ----  ".$_SESSION['fname']." ---- ".$_SESSION['lname'];


?>







<html>

<head>


<style type="text/css">
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


</style>

</head>

<body  background="i2.jpg">

<br>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="history.php">Transaction History</a></li>
  <li><a href="ngoselect.php">Donate</a></li>
  <li><a href="rehab.php">Rehab Setup</a></li>
  <li><a href="addmissing.php">Add Missing People</a></li>
  <li><a href="searchmissing.php">Search Missing People</a></li>
  <li><a href="page4.php">Logout</a></li>


</ul>










<br><br>




 <ul id="slide-out" class="side-nav" style="background-color: rgba(215, 212, 197, 0.39); border-radius: 10px;">
    <li><div class="userView" style="background-color: rgba(171, 168, 149, 0.79);">
      <div class="background">
        <img src="i1.jpg" style="width: 250px;height: 250px;padding: 15px;border-radius: 30px;">
      </div>


     
      
     
    </div>

    </li>
<div style="position: relative;left: 2%;padding: 10px;font-size: 30px; ">

   <b> Name :</b> <?php echo $_SESSION['fname']."  ".$_SESSION['lname'] ?><br><br>
  <b>  Email Id :</b> <?php echo $_SESSION['lemail']?><br><br>
  <b>  Phone No. : </b><?php echo $_SESSION['phone']?>
    
   
</div>

  </ul>


  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>




</body>


</html>
