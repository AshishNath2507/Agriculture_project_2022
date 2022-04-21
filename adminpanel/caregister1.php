<?php
    session_start();
    require ('../connect.php');

    if(isset($_POST['register_btn']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];
        $rpswd = $_POST['rpswd'];
        
        if($pswd == $rpswd)
        {
            $query = "INSERT INTO coadmin VALUES ('null','$fname','$lname','$uname','$email','$pswd')";
            $query_run = mysqli_query($con, $query);
            if ($query_run) 
            {
                $_SESSION['status'] = "Registered Successfully";
                header("location: caregister.php");
            } 
            else 
            {
                $_SESSION['status'] = "Registration Failed";
                header("location: caregister.php");
            }
            
        }
        else
        {
            $_SESSION['status'] =  "Password Mismatched";
            header("location: caregister.php");
        }

    }

?>