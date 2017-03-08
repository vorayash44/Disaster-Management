


<?php

session_start();

if(!isset($_SESSION['email'])){
			echo '<script type="text/javascript">alert("Sorry Please login and then try");</script>';
				echo '<script type="text/javascript">window.location="login.php";</script>';
		}



	$connect=@mysqli_connect('localhost','root','') ;
	$db =@mysqli_select_db($connect,'csuser');

	
// echo $_SESSION['lemail']."  ----  ".$_SESSION['fname']." ---- ".$_SESSION['lname'];


?>







<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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

   
    
   
</div>

  </ul>


  

<?php

$connect= mysqli_connect("localhost","root","") or die('error');
	
	$db =@mysqli_select_db($connect,'csuser') or die ('error');

	$checkquery= "SELECT * FROM rehab ";
	
	$executequery=mysqli_query($connect,$checkquery) or die(mysqli_errno($connect));
	$numrows=mysqli_num_rows($executequery);

	while($row =mysqli_fetch_assoc($executequery))
      $cartsolutions[] = $row;

  		echo" <table><tr><th>email</th><th>location</th><th>capacity</th><th>description</th><th>NGO</th><th>Validate</th></tr>";


	for($i=0;$i<$numrows;$i++){

		echo "<tr><td>".$cartsolutions[$i]['email']."</td><td>".$cartsolutions[$i]['location']."</td><td>".$cartsolutions[$i]['capacity']."</td><td>".$cartsolutions[$i]['description']."</td><td>".$cartsolutions[$i]['ngo']."


		<td>";

		if ($cartsolutions[$i]['validate']=='no') {

			# code...
			echo "<button  name='".$cartsolutions[$i]['id']."' id='".$cartsolutions[$i]['id']."' onclick='done(".$cartsolutions[$i]['id'].")'; style='color:white; background-color:red;border-radius:10px;' value='Validate'>Validate</button></td></tr>";
		}else{
					echo "<button  name='".$cartsolutions[$i]['id']."' id='".$cartsolutions[$i]['id']."' onclick='done(".$cartsolutions[$i]['id'].")'; style='color:white; background-color:red;border-radius:10px;' value='Validate'>Validated</button></td></tr>";

		}

		


		

	}


echo "</table>";

?>

<script>

/*

$('#remove').on('click', function(e){
      var id= parseInt(e.currentTarget.name);
      console.log(id);
      var urlString="id="+id;
      $.ajax
      ({
  url: "validate.php",

  type : "POST",
  cache : false,
  data : urlString,
  success: function(response)
  {alert("Removed");
    window.location="ndrf.php";
  //alert(response);
  //window.location="getjsondata.php";
  },
  complete: function(response)
  {
   alert("Removed");
    response;
  },
  error: function(response)
  {
    alert(response+"ERROR IN AJAX");
  }

  });


  });



*/







function done(id){

 //  var comment=document.getElementById("comment").value;
 // document.getElementById("enter1").value=comment;
 
  // document.write(comment); 
 alert(id);
 // var elements = document.getElementsByName(id);

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {

      document.getElementById(id).innerHTML="Validated";
      console.log("andar aaya");
    }
  }
  xmlhttp.open("GET","validate.php?id="+id,true);
  xmlhttp.send();



}



</script>

</body>


</html>
