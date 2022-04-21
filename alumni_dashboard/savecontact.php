<?php 
$con=mysqli_connect("localhost","root","","blog");
$Name=$_POST["name"];
$Email=$_POST["email"];
$Phone_no=$_POST["phone"];
$Message=mysqli_escape_string($con,$_POST["message"]);
$sql="insert into cont values(null,'$Name','$Email','$Phone_no','$Message');";
$result=mysqli_query($con,$sql);
if ($result) 
{
	header("location:contactus.php?save=1");
}
else
{
  echo mysqli_error($con);
 }
 ?>
