

<?php
    session_start();
    require "connect.php";

    if(isset($_POST["register"])){
        $fname = mysqli_real_escape_string($con, trim($_POST["fname"]));
        $email = mysqli_real_escape_string($con, trim($_POST["email"]));
        $pswd = mysqli_real_escape_string($con, trim($_POST["pswd"]));
        // $rpswd = mysqli_real_escape_string($con, trim($_POST["rpswd"]));
        

        $check_query = mysqli_query($con, "SELECT * FROM alumnireg where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($pswd)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($pswd, PASSWORD_BCRYPT);


                $result = mysqli_query($con, "INSERT INTO alumnireg VALUES (null, '$fname','$email', '$password_hash', 'notverified')");
    
                if($result){
                    $otp = rand(1000,9999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
                        
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='ashishnath.sendemail@gmail.com';
                    $mail->Password='123ert678';
    
                    $mail->setFrom('email account', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code for registration is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Assam Agricultural University</b>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('otpverify.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }
?>