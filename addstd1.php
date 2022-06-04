<?php

    include ("connect.php");
    
    if(isset($_POST['submit'])){

        $name=mysqli_real_escape_string($con, trim($_POST["name"]));
        $branch=mysqli_real_escape_string($con, trim($_POST["branch"]));
        $year=mysqli_real_escape_string($con, trim($_POST["year"]));
        $email=mysqli_real_escape_string($con, trim($_POST["email"]));
        $phone=mysqli_real_escape_string($con, trim($_POST["phone"]));
        $address=mysqli_real_escape_string($con, trim($_POST["address"]));
        $photo=$_FILES["photo"];

        $allowed = array('jpg', 'jpeg', 'png');

        if ($_FILES['photo']['error'] === 4) {
            $photo1 = null;
            echo "<script>alert('Image doesnot exist');</script>";
        } else {    
            $filename = $photo['name'];
            $filesize = $photo['size'];
            $filetemp = $photo['tmp_name'];
    
            $fileExt = explode('.', $filename);
            $fileActualEXt = strtolower(end($fileExt));
    
    
            if (!in_array($fileActualEXt, $allowed)) {
                echo "<script>alert('Invalid image extension. Use jpg/jpeg/png only.');</script>";
            }
            else if($filesize > 2000000){
                echo "<script>alert('File size is too large. Use file size of less than 2MB');</script>";
            }
            else{
                $filenamenew = uniqid('', true) . "." . $fileActualEXt;
                $photo1 = 'uploads/' . $filenamenew;
                move_uploaded_file($filetemp, $photo1);

                $result= "INSERT INTO students VALUES (null, '$name', '$branch' , '$year', '$email', '$phone', '$address', '$photo1', CURRENT_TIMESTAMP, DEFAULT)";

                if(mysqli_query($con, $result))
                {
                    echo "<h3>Data stored in the database successfully Please browse phpMyAdmin</h3>";
                    header("Location:addstd.php?data=stored");
                }
                else
                {
                    echo "<h3>Data is not stored.</h3>";
                    echo mysqli_error($con);
                }
        
            }
    
        }

    }
?>