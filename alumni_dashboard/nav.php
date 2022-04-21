<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" content="width=device-width, initial-scale=1">
<title>BLOG</title>
<link href="https://www.w3schools.com/w3css/4/w3.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style type="text/css">
</style>
</head>
<body>
  <div class="w3-container w3-bar w3-padding" style="background: url(image/navbg.jpg); height: 50px;">
  <div class="w3-left w3-text-white" style=""> 
    <i>
  <a href="#" class="w3-bar-item  w3-mobile w3-hover-text-orange" style="; text-decoration: none;"><i class="fa fa-envelope"></i>&nbsp; aau@gmail.com</a>
  <span style="color: orange;" class="w3-bar-item">/</span>
  <a href="#" class="w3-bar-item  w3-mobile w3-hover-text-orange" style=" text-decoration: none;"><i class="fa fa-phone"></i>&nbsp;
  (+91) 7002773320</a>
</div>
<div class="w3-right w3-text-white">
  <a href="about.php" class="w3-bar-item w3-mobile w3-hover-text-orange" style="width: ; text-decoration: none;"><i class="fa fa-info-circle"></i>&nbsp;About</a>
  <span style="color: orange;" class="w3-bar-item">/</span>
  <a href="contactus.php" class="w3-bar-item  w3-mobile w3-hover-text-orange" style="width: ; text-decoration: none;"><i class="fa fa-address-card"></i>&nbsp;Contact us</a>
  <span style="color: orange;" class="w3-bar-item">/</span>
  <a href="register.php" class="w3-bar-item w3-mobile w3-hover-text-orange" style="width: ; text-decoration: none;"><i class="fa fa-pencil-square-o"></i>&nbsp;Register</a>
   <?php

      if(isset($_SESSION["uname"]))
      {

     ?>
      <a href="mybooking.php" class="w3-red w3-btn w3-round" ><i class="fa fa-ticket"></i>&nbsp;My Booking </a>
      <?php 
     }

   else
   {
     ?>
   <span style="color: orange;" class="w3-bar-item">/</span>
   
   <button class="w3-hover-orange w3-btn w3-round"  onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-group "></i>&nbsp;update password</button>
    <?php
 }
   ?>
</div>
  </div>    
   <div class="w3-bar w3-container" style="height:120px; color: darkblue;">
    <a href="index.php" class="w3-bar-item"><img src="image/aau.jpg" style="width: 35%;"></a>
  <div class="w3 w3-right" style="padding: 1%;">
  <a href="index.php" class="w3-bar-item  w3-mobile w3-hover-text-orange" style="; text-decoration: none;"><i class="fa fa-home"></i>&nbsp; Home</a>
  <span style="color: orange;" class="w3-bar-item">/</span>
 
  <div class="w3-dropdown-hover">
  <button class=" w3-button w3-hover-white w3-hover-text-orange" style="text-decoration:none; "><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;update&nbsp; <i class="fa fa-angle-down"></i></button> 	
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="alumniform.php" class="w3-bar-item w3-button w3-hover-text-orange"> personal info</a>
      
    </div>
    </div>
     <span style="color: orange;" class="w3-bar-item">/</span>
     <?php

      if(isset($_SESSION["uname"]))
      {

     ?>
 <a href="logout.php" class="w3-hover-orange w3-btn w3-round" ><i class="fa fa-sign-out"></i>&nbsp;<?php 
echo 'WELCOME &nbsp;'.$_SESSION["uname"];

  ?> </a>
     <?php 
     }

   else
   {
     ?>
   

   <button class="w3-hover-orange w3-btn w3-round"  onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-group "></i>&nbsp;Login</button>
   <?php
 }
   ?>
  </div>
</div> 


<div id="id01" class="w3-modal" >
    <div class="w3-modal-content" style="width: 600px; background:url(image/nav.jpg);">
      <div class="w3-container w3-w3-moblie" >
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <center>
       <form action="log.php" method="post" class="w3-container " style="width: 500px; padding: 3%">
   <h1 class="w3-round w3-center" style="color: white; text-shadow: 2px 2px black"><b> User Login</b></h1><br>
  <label class="w3-text-white w3-left" style="color: white; text-shadow: 2px 2px black"><b> User Id : </b></label>
  <input class="w3-input" type="email" placeholder="Email Id" name="user" required=""><br>
  <label class="w3-text-white w3-left w3-Password" style="color: white; text-shadow: 2px 2px black"><b> Password : </b></label>
  <input class="w3-input" type="Password" placeholder= "Enter Password" name="pass" required="" maxlength="8"><br>
  <input type="submit" value="Log In" name="sub" class="w3-btn w3-round w3-blue w3-hover-white"><br>
  <p style="color: white;"><b> Not registered yet?&nbsp;<a href="register.php" style="text-decoration: none; color: orange;" class="w3-hover-text-white">Register Here</a></b> </p>

      </form>
      </center>
      </div>
    </div>
  </div>
  <div id="id02" class="w3-modal" >
    <div class="w3-modal-content" style="width: 600px; background:url(image/nav.jpg);">
      <div class="w3-container w3-w3-moblie" >
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <center>
       <form action="admin.php" method="post" class="w3-container " style="width: 500px; padding: 3%">
   <h1 class="w3-round w3-center" style="color: white; text-shadow: 2px 2px black"><b> Admin Login</b></h1><br>
  <label class="w3-text-white w3-left" style="color: white; text-shadow: 2px 2px black"><b> Admin Id : </b></label>
  <input class="w3-input" type="email" placeholder="Email Id" name="admin" required=""><br>
  <label class="w3-text-white w3-left w3-Password" style="color: white; text-shadow: 2px 2px black"><b> Password : </b></label>
  <input class="w3-input" type="Password" placeholder= "Enter Password" name="pass" required="" maxlength="8"><br>
  <input type="submit" value="Log In" name="sub" class="w3-btn w3-round w3-blue w3-hover-white">

      </form>
      </center>
      </div>
    </div>
  </div>
  <?php
 if(isset($_GET['exist']))
 {
  ?>
  <script type="text/javascript">
    alert("You have to Change Email or Phone No.");
  </script>
 
 <?php
}
?>

<?php
 if(isset($_GET['g']))
 {
  ?>
  <script type="text/javascript">
    alert("Image added successfully");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['notg']))
 {
  ?>
  <script type="text/javascript">
    alert("Login first");
  </script>
 
 <?php
}