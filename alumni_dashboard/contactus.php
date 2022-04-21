
<?php include 'nav.php' ?>

	
    
<div class="w3-row">
<div class="w3-col w3-half w3-container" style="padding-left: 5%;">
<form class="w3-container" action="savecontact.php"  method="post">
	<h1 style="color: blue; text-shadow: 2px 2px black; border-bottom: 4px solid orange;"><b> Contact Us </b></h1>
	<p class="w3-text-indigo"><b> Get in touch and let us know how we can help.<br> Fill out the form and we’ll be in touch as soon as possible.</b></p>
	<label class=" w3-left w3-text-blue" ><b> Name : </b></label>
		<input class="w3-input w3-border" type="text" name="name" placeholder="Name" required=""><br>
		<label class=" w3-left w3-text-blue"  ><b> Email : </b></label>
		<input class="w3-input w3-border " type="email" name="email" placeholder="Email" required=""><br>
		<label class=" w3-left w3-text-blue" ><b> Phone no : </b></label>
		<input class="w3-input w3-border" name="phone" type="tell" placeholder="9999999999" maxlength="10" required=""><br>
		<label class="w3-left w3-text-blue" ><b> Message :</b> </label>
		<textarea type="text" name="message" placeholder="Message" class="w3-input w3-border w3-text-area" ></textarea><br>
		<input  class="w3-round-xlarge w3-btn w3-deep-purple" type="submit" value="Send Message">
</form>
</div>
	<div class="w3-rest w3-half w3-container">
		<img src="image/sun11.jpg" style="width: 80%;">
</div>
</div>
<br><br>

<div class="w3-row-padding" style="width: 100%;">
<div class="w3-third w3-container w3-card w3-margin w3-padding" style=" background: white; height: 250px; border-radius: 30px; width:30%;">
	<center>
		<i class="fa fa-paper-plane" style="font-size: 50px; color: blue;"></i><br><br>
		<b class="w3-text-blue"> ADDRESS:</b>
		<p><b class="w3-text-blue"> Borbheta Jorhat,Assam,785004 </b></p>
	</center>
</div>
<div class="w3-third w3-container w3-card w3-margin w3-padding" style=" background: white; height: 250px; border-radius: 30px; width:30%;">
	<center>
				<i class="fa fa-envelope-open" style="font-size: 50px; color: blue;"></i><br><br>

		<b class="w3-text-blue"> EMAIL ADDRESS</b><br><br>
		<a href="#" class="w3-hover-text-orange w3-text-blue" style="text-decoration: none;"><b> aau@gmail.com</b></a>
	</center>
</div>
<div class="w3-card w3-third w3-container w3-margin w3-padding" style=" background: white; height: 250px; border-radius: 30px; width:30%;">
	<center>
				<i class="fa fa-phone" style="font-size: 60px; color: blue"></i><br><br>

		<b class="w3-text-blue"> PHONE NO</b><br><br>
		<a href="#" class="w3-hover-text-orange w3-text-blue" style="text-decoration: none;"><b> (+91) 7002773320</b></a>
	</center>
</div>
</div>


<?php include 'footer.php'; ?>
</body>

</html>