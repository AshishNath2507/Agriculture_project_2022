<?php include 'nav.php';
include 'connect.php';

  ?>

 	<div class=" w3-row-padding" style="height: 800px; width: 100%; margin-top: 1%; background: whitesmoke; overflow: scroll;">
 		<?php  
$a=mysqli_query($con,"select * from blogdata");
while($row=mysqli_fetch_array($a))

{
 		?>																									
 		<div class="w3-container w3-content" style="border-radius: 30px; margin-top: 1%;">
 			<div class=" w3-card w3-container w3-padding" style="background: white;">
 			<center>
                 Title Of Blog :
                 <?php echo $row['blogTitle']?>
                 <br>
                 <?php echo $row['blogContent']?>
            </center>
 		
 			
 	</div>
 		</div>

<?php
}
?> 		
 	</div>




</body>
</html>