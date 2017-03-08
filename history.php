<?php
	session_start();
	 ob_start();
 



  
    if(!isset($_SESSION['lemail'])){
      echo '<script type="text/javascript">alert("Sorry Please login and then try");</script>';
        echo '<script type="text/javascript">window.location="index.php";</script>';
    }







 $connect= mysqli_connect("localhost","root","") or die('error');
  
  $db =@mysqli_select_db($connect,'csuser') or die ('error');
   $email=$_SESSION['lemail'];
  // echo "string";
  $query=("SELECT * FROM donations WHERE email='$email' " );
  $result = mysqli_query($connect,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>


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
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="history.php">Transaction History</a></li>
  <li><a href="ngoselect.php">Donate</a></li>
  <li><a href="rehab.php">Rehab Setup</a></li>
  <li><a href="addmissing.php">Add Missing People</a></li>
  <li><a href="searchmissing.php">Search Missing People</a></li>
  <li><a href="page4.php">Logout</a></li>


</ul>



<div class="container">
  <h2>Donations made by you.</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Ngo Name</th>
        <th>Date</th>
        <th>Amount</th>
      </tr>
    </thead>

      <tbody>
        <?php
          while( $row = mysqli_fetch_array($result) ):?>
          
           
            <tr>
              <td><?php echo $row['ngo'];?></td>
               <td><?php echo $row['date1'];?></td>
                <td><?php echo $row['amount'];?></td>

<!--               <td><?php echo $row['sproduct'];?></td>
                <td><?php echo $row['squality'];?></td>
                 <td><?php echo $row['sprice'];?></td>
                 <td><?php echo $row['sper'];?></td>
                 <td><?php echo $row['saddress'];?></td>
                 <td><?php echo $row['sdate'];?></td>
                 <td><?php echo $row['scontact'];?></td>
                </tr> -->


         
        <?php endwhile; ?>
      </tbody>
    </table>




</div>
</body>
</html>


















