
<?php  include'connect.php';
session_start();

$admin=$_POST["admin"];
$password=$_POST["pass"];
$sql="select*from admin where email='$admin'";
$qury=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qury);
$pass=$row["password"];
$email=$row["email"];
if ($admin==$email) {
	
	
	if ($pass==$password)
	 {
		header("location:adminpannel.php?admin=1");
		$_SESSION["un"]=true;
		$_SESSION["un"]=$email;
	}
	else
	{
		 header("location:index.php?passworddonotmatch=1");
	}
}
else
{

    header("location:index.php?Adminnotfound=1");
}
?>