<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="alumnireg.css">

</head>

<body>
    <?php include "header.php"; ?>
    <div class="container">
        <div class="alumni-text">
            <h1>Alumni Registration >>> Account Verification</h1>
            <p>An OTP was send to your email. Please check your email and type it below.</p>
        </div>
        <div class="alumnireg otp-form">
            <div class="alumni-form card">
                <h2>Enter the OTP below</h2>
                <form action="#" method="post">
                    <div class="input-row">
                        <input type="text" name="otpverify" placeholder="Enter OTP" required autofocus>
                    </div>
                    <div class="input-row">
                        <button class="btn" class="btn btn-primary" name="verify" type="submit">Verify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <div class="otp-top-container">
        <div class="otp-heading">
            Account Verification!!!
        </div>
        <div class="otp-form">
            <form action="#" method="post">
                <div class="otp-input">
                    <input type="text" name="otpverify" placeholder="Enter OTP" required autofocus>
                </div>
                <div class="otp-button">
                    <button class="btn" name="verify" type="submit">Verify</button>
                </div>
            </form>
        </div>
    </div> -->

</body>

</html>

<?php
require("connect.php");

if (isset($_POST["verify"])) {
    $otp = $_SESSION['otp'];
    $email = $_SESSION['mail'];
    // $otp_code = $_POST['otp_code'];
    $otp_code = mysqli_real_escape_string($con, trim($_POST["otpverify"]));

    if ($otp != $otp_code) {
?>
        <script>
            alert("Invalid OTP code");
        </script>

    <?php
    } else {
        mysqli_query($con, "UPDATE alumnireg SET status = 'verified' WHERE email = '$email'");
    ?>
        <script>
            alert("Verfiy account done, you may sign in now");
            window.location.replace("./alumni_dashboard/blogmaybe.php");
        </script>
<?php
    }
}

?>