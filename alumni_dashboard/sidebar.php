<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Travel Life home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=" https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
		

	  <div class="w3-bar w3-black">
      <?php

      if(isset($_SESSION["un"]))
      {

     ?>
 <span class="w3-blue w3-btn w3-round w3-right" ><i class="fa fa-user-circle"></i>&nbsp;<?php 
echo 'WELCOME &nbsp;'.$_SESSION["un"];

  ?> </span>
     <?php 
     }?>

    </div>
		<!-- sidebar -->
		<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card"  id="mySidebar" style="z-index:;width:200px;">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="image/logo.jpg"  style="width:60%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
  class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
        <a href="adminpannel.php" style="text-decoration: none;"><h3 class="w3-bar-item w3-black">Admin Panel</h3></a>
         	<a href="adminpannel.php" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a>
         	<a href="addcab.php" class="w3-bar-item w3-button"><i class="fa fa-cab"></i>&nbsp;&nbsp;Add Cab</a>
         	<!-- <a href="addbus.php" class="w3-bar-item w3-button"><i class="fa fa-bus"></i>&nbsp;&nbsp;Add Bus</a> -->
          <a href="viewcustomer.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>&nbsp;&nbsp;View Customer</a>
          <a href="viewcab.php" class="w3-bar-item w3-button"><i class="fa fa-cab"></i>&nbsp;&nbsp;View cab</a>
          <!-- <a href="viewbus.php" class="w3-bar-item w3-button"><i class="fa fa-bus"></i>&nbsp;&nbsp;View Bus</a> -->
           <a href="viewcontactus.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle"></i>&nbsp;&nbsp;View Contact us</a>
          <a href="logout.php" class="w3-bar-item w3-button w3-round w3-blue"><i class="fa fa-sign-out">&nbsp;&nbsp;</i>Logout</a>
   
        
</nav>
</body>
</html>
<?php
 if(isset($_GET['cusdel']))
 {
  ?>
  <script type="text/javascript">
    alert("Deleted customer");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['delbus']))
 {
  ?>
  <script type="text/javascript">
    alert("Deleted Bus");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['deltr']))
 {
  ?>
  <script type="text/javascript">
    alert("Deleted Train ");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['delcab']))
 {
  ?>
  <script type="text/javascript">
    alert("Deleted Cab");
  </script>
 
 <?php
}

?>

<?php
 if(isset($_GET['adcb']))
 {
  ?>
  <script type="text/javascript">
    alert("Cab Added");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['unbs']))
 {
  ?>
  <script type="text/javascript">
    alert("Bus Unbook");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['untr']))
 {
  ?>
  <script type="text/javascript">
    alert("Train Unbook");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['adbs']))
 {
  ?>
  <script type="text/javascript">
    alert("Bus Added ");
  </script>
 
 <?php
}

?>
<?php
 if(isset($_GET['adtr']))
 {
  ?>
  <script type="text/javascript">
    alert("Train Added");
  </script>
 
 <?php
}

?>