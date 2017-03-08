<!--<?php






  ob_start();
  include_once 'dbconnect.php';





  
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
  }
?>
-->


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css1/style.css">

  
</head>

<body background="i2.jpg">

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="signupconnect.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off"  name="fname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="lname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"  />
          </div>


           <div class="field-wrap">
            <label>
              Phone number<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="phone"  />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="pwd" />
          </div>

           <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="cpwd" />
          </div>
          
          <button type="submit" class="button button-block"  name="register" />Register</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="signupconnect.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="lemail"   />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="lpwd"  />
          </div>
          
          <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js1/index.js"></script>

</body>
</html>
