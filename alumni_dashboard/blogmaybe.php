<?php include 'nav.php' ?>
<div class="">
  
<div class="w3-display-container mySlides ">
  <img class="" src="image/bgimg1.jpg" style="width:100%;position: bottom">
  <div class="w3-display-middle w3-large w3-container w3-text-white">
   <span class="w3-animate-top"><h1 style="text-shadow: 1px 1px gray; font-size: 70px;">Welcome<br>To <b class="w3-text-red">AAU BLOG</b>
   </h1></span>
  </div>
</div>
 <div class="w3-display-container mySlides w3-animate-fading">
  <img class="" src="image/bgimg2.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-text-white">
   <span class="w3-animate-top"><h1 style="text-shadow: 1px 1px gray; font-size: 70px;">Welcome<br>To <b class="w3-text-red">AAU BLOG</b></h1></span>
  </div>
</div>
  <div class="w3-display-container mySlides w3-animate-fading">
  <img class="" src="image/bgimg3.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-text-white">
   <span class="w3-animate-top"><h1 style="text-shadow: 1px 1px gray; font-size: 70px;">Welcome<br>To <b class="w3-text-red">AAU BLOG</b></h1></span>
  </div>
</div>
 
</div>

<div class="w3-container w3-content" style="margin-top: 5%;">
  <div class="w3-row-padding">
    <div class="w3-half">
        <h5><B>SO GLAD YOU ARE HERE</B></h5>
        <h1 style="border-bottom: 4px solid orange">  EXPRESS WITH <B>AAU BLOG</B></h1>
        <h3 style="border-bottom: 4px solid green"><b>SHARE EVERYTHING.</b></h3>
         <p  style="text-indent: 40px; text-align: justify;"> Travelive is the travel and tourism service provider offering the different packages from Assam,Nagaland or more various beautiful places in North-East. </p>
         <a href="viewblog.php" class="w3-button w3-hover-white w3-hover-text-orange"><i class="fa fa-envelope"></i>&nbsp;&nbsp;View Blogs</a>

    </div>
<div class="w3-half">
  <img src="image/aauside.png">
</div>    
  </div>

  </div>

<br>
<div class="w3-container w3-content" style="margin-top: 5%;">
  <div class="w3-row-padding">
  <div class="w3-half">
    <img src="image/sun1.jpg" style="width: 100%; height: 90%; ">
  </div>
  <div class="w3-half">
    <h1 style="border-bottom: 4px solid orange">WRITE YOUR <B>BLOGS HERE</B></h1>
  <p  style="text-indent: 40px; text-align: justify;">  We’re a worker claimed travel organization secured by our qualities, trustworthiness and commitment to client benefits.</p>
  <a href="blogwrite.php" class="w3-button w3-hover-white w3-hover-text-orange"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Write Blogs</a>
  </div>
</div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>

<?php  include'footer.php'; ?>
</body>
</html>