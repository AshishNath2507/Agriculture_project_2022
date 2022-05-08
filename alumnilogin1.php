

<?php
session_start();

require("connect.php");

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    $result = mysqli_query($con, "SELECT * FROM alumnireg WHERE email = '$email'");
    $row = mysqli_fetch_array($result);

    // if ($row['email'] == $email){
    //     if ($row['pswd'] == $pswd) {
    //         $_SESSION['email'] = $email;
    //         if ($row['status'] == 'notverified') {
    //             header("Location:./alumnilogin.php?status=emailnotverified");           
    //         } 
    //         else {                
    //             header("Location:./alumni_dashboard/blogmaybe.php");
    //         }
    //     } 
    //     else {
    //         header("Location:./alumnilogin.php?err=wrong+pswd");                
    //     }        
    // }
    // else{
    //     header("Location:./alumnilogin.php?err=wrong+email");

    // }
    if ($row['email'] != $email) {
        header("Location: alumnilogin.php?wrongemailcredentials");
    }
    if ($row['pswd'] != $pswd) {
        header("Location: alumnilogin.php?wrongemail+passwordcredentials");
    }
    if($row['status'] != "verified"){
        header("Location: alumnilogin.php?verifyemailfirst");
    }
    if($row['email'] == $email && $row['pswd'] == $pswd && $row['status'] == "verified"){
        header("Location: alumni_dashboard/blogmaybe.php");
    }
    else{
        header("Location: alumnilogin.php?invalidcredentials");
    }
}


?>    