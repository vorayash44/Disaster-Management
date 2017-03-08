<?php

session_start();


	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	/*define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'csuser');*/
	
	$conn = @mysqli_connect('localhost','root','');
	//$dbcon = mysqli_select_db(DBNAME);
	if($conn)
	{
		$db=@mysqli_select_db($conn,'csuser');
	}
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	//if ( !$dbcon ) {
		//die("Database Connection failed : " .mysqli_error());
	//}






  
  $error = false;
  if( isset($_POST['register']) ) {  
    
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $pwd = trim($_POST['pwd']);
    /*
    $six = trim($_POST['per']);
    $seven = trim($_POST['address']);
    $eight = trim($_POST['date']);
    $nine = trim($_POST['contact']);*/



    $query = "INSERT INTO userdata(fname,lname,email,phone,pwd) VALUES ('$fname','$lname','$email','$phone','$pwd')";
      $res = mysqli_query($conn,$query);

      echo '<script type="text/javascript ">window.location="signupform.php"; </script>';
  }



  /*boundary--------------------------------------------------------------------------------------------------------------------------------*/

if( isset($_POST['login']) ) {  
    
    // prevent sql injections/ clear user invalid inputs
    $emaillog = trim($_POST['lemail']);
   // $emaillog = strip_tags($emaillog);
    //$emaillog = htmlspecialchars($emaillog);
    
    $passwordlog = trim($_POST['lpwd']);
    //$passwordlog = strip_tags($passwordlog);
    //$passwordlog = htmlspecialchars($passwordlog);
    // prevent sql injections / clear user invalid inputs
    
    /*if(empty($emaillog)){
      $error = true;
      $emailError = "Please enter your email address.";
    } else if ( !filter_var($emaillog,FILTER_VALIDATE_EMAIL) ) {
      $error = true;
      $emailError = "Please enter valid email address.";
    }
    
    if(empty($passwordlog)){
      $error = true;
      $passError = "Please enter your password.";
    }
    
    // if there's no error, continue to login*/
    if (!$error) {
      
      //$password = hash('sha256', $passwordlog); // password hashing using SHA256
    
      $res=mysqli_query($conn,"SELECT id, fname, lname, phone, pwd FROM userdata WHERE email='$emaillog' ");
      $row=mysqli_fetch_array($res);
      $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
      
     $lname= $row['lname'];
     $fname= $row['fname'];
     $phone= $row['phone'];
      if( $count == 1 && $row['pwd']==$passwordlog ) {
       
        $_SESSION['lemail'] = $_POST['lemail'];
         $_SESSION['lname'] = $lname;
          $_SESSION['fname'] = $fname;
           $_SESSION['phone'] = $phone;
        
        header("Location: profile.php");
      } else {
        echo " ----- ".$_POST['lemail'];
        $errMSG = "Incorrect Credentials, Try again...";
        echo $errMSG;
      }
        
    }
    
  }

?>

