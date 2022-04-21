    <?php 
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require('PHPMailer/Exception.php');
        require('PHPMailer/PHPMailer.php');
        require('PHPMailer/SMTP.php');
        require('connect.php');

        if (isset($_POST['submit'])) {
            $email = $_POST['alumniemail'];
            $password = $_POST['password'];

            $result = "INSERT INTO send_email VALUES (null, '$email', '$password')";

            if (mysqli_query($con, $result)) {
                echo "<h3>Data stored in the database successfully Please browse phpMyAdmin</h3>";
                header("Location:alumniadd.php");
            } else {
                echo "<h3>Data is not stored.</h3>";
                echo mysqli_error($con);
            }

            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'ashishnath.sendemail@gmail.com';                     //SMTP username
                $mail->Password   = '123ert678';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_SMTPS`

                //Recipients
                $mail->setFrom('ashishnath.sendemail@gmail.com', 'AAU.com');
                $mail->addAddress($email);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Login Credentials for Form Fillup';
                $mail->Body    = "<h3>Please use the below credentials for a/c login</h3> <br> Email: $email <br> Password: $password <br> Form Link: http://localhost/agri/alumniform.php";
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo "<script>alert('Message has been sent')</script>";
            } 
            catch (Exception $e) 
            {
                echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
            }
        }
    ?>
