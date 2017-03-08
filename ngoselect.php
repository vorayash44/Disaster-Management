
<?php

  session_start();

    if(!isset($_SESSION['lemail'])){
      echo '<script type="text/javascript">alert("Sorry Please login and then try");</script>';
        echo '<script type="text/javascript">window.location="index.php";</script>';
    }

?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
<!--
Puzzle Template
http://www.templatemo.com/tm-477-puzzle






-->


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


    <title>Ngo select</title>
</head>

<body background="i2.jpg">
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



   <!-- <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">Puzzle</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a class="external" href="https://www.facebook.com/templatemo" target="_blank">External</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>-->
    <br><br><br>
    <div class="container boxed" >
        <section class="col-md-12 content" id="home" style="top-padding: 50px;">
           <div class="col-lg-6 col-md-6 content-item"  >
               <img src="ngo/ngo1.jpeg" alt="Image" class="tm-image" height="200" width="200">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
              <!-- <h2 class="main-title text-center dark-blue-text">Puzzle Bootstrap Template</h2>
               <p>Puzzle is a Bootstrap (v3.3.6) HTML CSS layout provided by <span class="light-blue-text">templatemo</span>. You can download, modify and use this layout for absolutely free of charge.</p>
               <p>No backlink is needed to use this website template. Credit goes to <span class="light-blue-text">Unsplash</span> for images used in this layout.</p>  -->             
               <button type="button" class="btn btn-big dark-blue-bordered-btn" name="nbtn1" onclick="window.location.href='payfinal.php?ngoname=lions_club'">Pay here</button>
               
           </div>
       </section>
    </div>



       <div class="container boxed" >
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="ngo/ngo2.jpeg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
              <!-- <h2 class="main-title text-center dark-blue-text">Puzzle Bootstrap Template</h2>
               <p>Puzzle is a Bootstrap (v3.3.6) HTML CSS layout provided by <span class="light-blue-text">templatemo</span>. You can download, modify and use this layout for absolutely free of charge.</p>
               <p>No backlink is needed to use this website template. Credit goes to <span class="light-blue-text">Unsplash</span> for images used in this layout.</p>  -->             
               <button type="button" class="btn btn-big dark-blue-bordered-btn" name="nbtn2" onclick="window.location.href='payfinal.php?ngoname=rotary_club'" >Pay here</button>
               
           </div>
       </section>
    </div>


   <div class="container boxed">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="ngo/ngo3.jpeg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
              <!-- <h2 class="main-title text-center dark-blue-text">Puzzle Bootstrap Template</h2>
               <p>Puzzle is a Bootstrap (v3.3.6) HTML CSS layout provided by <span class="light-blue-text">templatemo</span>. You can download, modify and use this layout for absolutely free of charge.</p>
               <p>No backlink is needed to use this website template. Credit goes to <span class="light-blue-text">Unsplash</span> for images used in this layout.</p>  -->             
               <button type="button" class="btn btn-big dark-blue-bordered-btn" name="nbtn3" onclick="window.location.href='payfinal.php?ngoname=ndma'" >Pay here</button>
               
           </div>
       </section>
    </div>


   <div class="container boxed">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="ngo/ngo4.jpeg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
              <!-- <h2 class="main-title text-center dark-blue-text">Puzzle Bootstrap Template</h2>
               <p>Puzzle is a Bootstrap (v3.3.6) HTML CSS layout provided by <span class="light-blue-text">templatemo</span>. You can download, modify and use this layout for absolutely free of charge.</p>
               <p>No backlink is needed to use this website template. Credit goes to <span class="light-blue-text">Unsplash</span> for images used in this layout.</p>  -->             
               <button type="button" class="btn btn-big dark-blue-bordered-btn" name="nbtn4" onclick="window.location.href='payfinal.php?ngoname=plan_india'" >Pay here</button>
               
           </div>
       </section>
    </div>

 <div class="container boxed">
        <section class="col-md-12 content " id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="ngo/ngo5.jpeg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
              <!-- <h2 class="main-title text-center dark-blue-text">Puzzle Bootstrap Template</h2>
               <p>Puzzle is a Bootstrap (v3.3.6) HTML CSS layout provided by <span class="light-blue-text">templatemo</span>. You can download, modify and use this layout for absolutely free of charge.</p>
               <p>No backlink is needed to use this website template. Credit goes to <span class="light-blue-text">Unsplash</span> for images used in this layout.</p>  -->             
               <button type="button" class="btn btn-big dark-blue-bordered-btn" name="nbtn5" onclick="window.location.href='payfinal.php?ngoname=care_india'">Pay here</button>
               
           </div>
       </section>
    </div>


<div class="text-center footer">
	<div class="container">
		Copyright @ 2015 Company Name
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>

<script>

// Check scroll position and add/remove background to navbar
function checkScrollPosition() {
    if($(window).scrollTop() > 50) {
      $(".fixed-header").addClass("scroll");
  } else {        
      $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {   
    // Single page nav
    $('.fixed-header').singlePageNav({
        offset: 59,
        filter: ':not(.external)',
        updateHash: true        
    });

    checkScrollPosition();

    // nav bar
    $('.navbar-toggle').click(function(){
        $('.main-menu').toggleClass('show');
    });

    $('.main-menu a').click(function(){
        $('.main-menu').removeClass('show');
    });
});

$(window).on("scroll", function() {
    checkScrollPosition();    
});


</script>
</body>
</html>