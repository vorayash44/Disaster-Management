
<?php

session_start();



   



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disaster Management..!!</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->


    <style type="text/css">
        

         #map {
        height: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
     
      


    </style>


  </head>
  <body>
    <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="index.html">Disaster</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="validrehab.php">Validated Rehab</a></li>
                       
                       
                        <?php
                        if(isset($_SESSION['lemail'])){
                      echo " <li><a href='page4.php'>Logout</a></li>";
                }else{
                        echo" <li><a href='signupform.php'>Login/SignUp</a></li> ";

                }
                        ?>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <div class="content">
                    <h1>A platform</h1>
                    <h3>that communicates, connects and engages Rescuers with the Disaster Affected people.</h3>
                    <br>
                    <a href="addmissing.php" class="btn btn-primary my-btn">Add Missing People</a>
                    <a href="searchmissing.php" class="btn btn-primary my-btn2">Search Missing People</a>
                </div>
            </div>
        </div>
    </div>

   









<section id="two" class="wrapper style1 special" style="background-color: rgb(72, 130, 239); height: 400px;">
                <div class="inner">
                    <header>

                    <br><br><br>
                        <h2 style="color: rgb(213, 230, 250); position: relative;left: 40%">  <b style="color: rgb(54, 3, 149); " >Live</b>Earthquake Data</h2>
                        
                    </header>
                    <br><br>
                    <div style="color: rgba(229, 66, 66, 0.99);">
                   <b>
                         &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp   StartDate &nbsp
                <input type="date" name="start" id="start" style="height: 30px;width:200px;border-radius: 4px;border-collapse: collapse;">
                      &nbsp&nbsp&nbsp  EndDate &nbsp&nbsp&nbsp
                           <input type="date" name="end" id = "end" style="height: 30px;width:200px;border-radius: 4px;border-collapse: collapse;">
                                 &nbsp &nbsp &nbsp &nbsp
                           Min Magnitude &nbsp&nbsp&nbsp

                            <select name="magnitude" id="mag" id="mag" style="width: 100px; background-color: rgba(204, 199, 198, 0.11);">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            </select>

</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <button onclick="print_data();" style="border-radius: 5px; background-color:rgba(185, 161, 161, 0.39);width: 130px;height: 50px;color:white; " ><b>GetData</b></button>
</div>
<div  id= "magtopper" overflow="hidden">
</div>
    <script>        
function renderhtml(data){
       
                    console.log("helooo3");
                var s1="<table style='border-spacing:40px ; border-collapse: separate;border:solid;border:5px solid black;'><tr><th>Place</th><th>longitude</th><th>latitude</th><th>Magnitude</th><th>Donate</th></tr>";


            for(i=0;i<data.features.length;i++){
                    console.log("helooo4");
                    s1+="<tr style='border:2px solid black;'><td>"+data.features[i].properties.place+"</td><td>"+data.features[i].geometry.coordinates[0]+"</td><td>"+data.features[i].geometry.coordinates[1]+"</td><td>"+data.features[i].properties.mag+"</td><td>hey</td></tr>";
                    console.log("aana chahiye");    
                    console.log(s1);
            }
console.log("helooo5");
            s1+="</table>";
                console.log("helooo6");
                document.getElementById("magtopper").innerHTML=s1;
console.log("helooo7");

}
</script>





                </div>
            </section>






    <div id="tf-portfolio">
        <div class="container">
           

        </div>
    </div>

   

   

   

    <nav id="tf-footer">
        <div class="container">
             <div class="pull-left">
                <p>2015 © Awesomess. All Rights Reserved. Designed and Coded by <a href="https://dribbble.com/jennpereira">Jenn</a> for <a href="https://themeforces.com">ThemeForces.Com</a></p>
            </div>
            <div class="pull-right"> 
                <ul class="social-media list-inline">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    <li><a href="#"><span class="fa fa-behance"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>


 
<script>

/*
function print1(){

    var start = document.getElementById("start").value;
    var end = document.getElementById("end").value;
    var mag = document.getElementById("mag").value;

  console.log(start);
   console.log(end);
    console.log(mag);



} */

function print_data(){

 var start = document.getElementById("start").value;
    var end = document.getElementById("end").value;
    var mag = document.getElementById("mag").value;
     var mag1 = parseInt(mag)+1;
    console.log(mag);
     console.log("helooo1");

var ourrequest = new XMLHttpRequest();
ourrequest.open('GET','http://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime='+start+'&endtime='+end+'&minmagnitude='+mag+'&maxmagnitude='+mag1);
ourrequest.onload=function(){
    var ourdata= JSON.parse(ourrequest.responseText);
    console.log(ourdata);
     console.log(ourdata.features.length);
    renderhtml(ourdata);
console.log("helooo2");
        

};



ourrequest.send();
}



</script>





</html>
