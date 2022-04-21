<?php

    include ("connect.php");
    
    $name=$_POST["name"];
    $dept=$_POST["dept"];
    $year=$_POST["year"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];

    $result= "INSERT INTO faculty VALUES (null, '$name', '$dept' , '$year', '$email', '$phone', '$address')";

    if(mysqli_query($con, $result))
    {
        echo "<h3>Data stored in the database successfully Please browse phpMyAdmin</h3>";
        header("Location:addfaculty.php");
    }
 	else
 	{
 		echo "<h3>Data is not stored.</h3>";
        echo mysqli_error($con);
    }


?>