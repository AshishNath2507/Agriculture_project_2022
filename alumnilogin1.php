

<?php

    session_start();  

    require ("connect.php");
    if(isset($_POST["submit"])){

        $email = $_GET["email"];
        $pswd = $_GET["pswd"];
    
        $result = mysqli_query($con, "SELECT * FROM alumnireg WHERE email = '$email'");
        $row = mysqli_fetch_array($result);
        

        if($row['status'] === 'notverified'){
            echo "<script>alert('The email account is not verified. Please verify your account first then login.')</script>";
        }
        else {
            
            if(($row['email'] == $email && $row['pswd'] == $pswd) == true) {
                $_SESSION['email']= $email;
                header("Location:./alumni_dashboard/blogmaybe.php");
            }else{
                header("Location:./alumnilogin.php?err=wrong+credentials");
            }
        }

    }

?>    