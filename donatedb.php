<?php

session_start();

ob_start();
include_once 'dbconnect.php';


  $error = false;
  if( isset($_POST['pay']) ) {  
    
    $ngo = trim($_GET['ngo']);
    $date = "29-01-2017";
    $amount= $_POST['amount'];
    $email = $_SESSION['lemail'];
    $pwd = trim($_POST['pwd1']);

    if (!$error) {

      $res=mysqli_query($conn,"SELECT pwd FROM userdata WHERE email='$email' ");
      $row=mysqli_fetch_array($res);
      $count = mysqli_num_rows($res);

      if( $count == 1 && $row['pwd']==$pwd ) {
        
        $query = "INSERT INTO donations(ngo,date1,amount,email) VALUES ('$ngo','$date','$amount','$email')";
        $res = mysqli_query($conn,$query);
       // echo '<script type="text/javascript ">window.alert("successfully paid"); </script>';
      echo '<script type="text/javascript ">window.location="profile.php"; </script>';
      } else {
         echo '<script type="text/javascript ">window.alert("Transaction Failed Try again"); </script>';
      echo '<script type="text/javascript ">window.location="profile.php"; </script>';
        $errMSG = "Incorrect Credentials, Try again...";
        echo $errMSG;
      }
 	}
 }
 ?>
