<?php

    include ("connect.php");
    
    
    $user=$_POST["bloguser"];
    $title=$_POST["blogTitle"];
    $content=$_POST["blogContent"];
    $time=$_POST["blogTime"];
    $like=$_POST["likes"];

    $result= "INSERT INTO blogdata VALUES (null, '$user', '$title' , '$content', '$time', '$like')";

    if(mysqli_query($con, $result))
    {
        echo "<h3>Data stored in the database successfully Please browse phpMyAdmin</h3>";
        header("Location:blogwrite.php");
    }
 	else
 	{
 		echo "<h3>Data is not stored.</h3>";
        echo mysqli_error($con);
    }


?>