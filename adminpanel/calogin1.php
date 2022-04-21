<?php 
    require ('../connect.php');   

    
        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];

        $result=mysqli_query($con,"select * from coadmin where uname = '$uname'");
        $row=mysqli_fetch_array($result);

        //    table column name        
        if($row['pswd']==$pswd)
	    {
             //[email]= user submit email
            header("Location:index.php");
            
        }
        else
        {
            echo "<script>alert('Invalid login details');</script>";
            header("location:calogin.php?err=1");
        }

?>