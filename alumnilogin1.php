

<?php

session_start();

require("connect.php");

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    $result = mysqli_query($con, "SELECT * FROM alumnireg WHERE email = '$email'");
    $row = mysqli_fetch_array($result);

    if ($row['email'] == $email){
        if ($row['pswd'] == $pswd) {
            // $_SESSION['email'] = $email;
            if ($row['status'] === 'notverified') {
                header("Location:./alumnilogin.php?status=emailnotverified");           
            } 
            else {                
                header("Location:./alumni_dashboard/blogmaybe.php");
            }
        } 
        else {
            header("Location:./alumnilogin.php?err=wrong+pswd");                
        }        
    }
    else{
        header("Location:./alumnilogin.php?err=wrong+email");

    }
}

?>    