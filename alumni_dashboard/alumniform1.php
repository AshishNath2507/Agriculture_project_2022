<?php
include("connect.php");

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con, trim($_POST["name"]));
    $clgname = mysqli_real_escape_string($con, trim($_POST["clgname"]));
    $gender = mysqli_real_escape_string($con, trim($_POST["gender"]));
    $dob = mysqli_real_escape_string($con, trim($_POST["dob"]));
    $occupation = mysqli_real_escape_string($con, trim($_POST["occupation"]));
    $compname = mysqli_real_escape_string($con, trim($_POST["compname"]));
    $oaddress = mysqli_real_escape_string($con, trim($_POST["oaddress"]));
    $state = mysqli_real_escape_string($con, trim($_POST["state"]));
    $pin = mysqli_real_escape_string($con, trim($_POST["pin"]));
    $country = mysqli_real_escape_string($con, trim($_POST["country"]));
    $paddress = mysqli_real_escape_string($con, trim($_POST["paddress"]));
    $pstate = mysqli_real_escape_string($con, trim($_POST["pstate"]));
    $ppincode = mysqli_real_escape_string($con, trim($_POST["ppincode"]));
    $pcountry = mysqli_real_escape_string($con, trim($_POST["pcountry"]));
    $nationality = mysqli_real_escape_string($con, trim($_POST["nationality"]));
    $bloodgroup = mysqli_real_escape_string($con, trim($_POST["bloodgroup"]));
    $email = mysqli_real_escape_string($con, trim($_POST["email"]));
    $phone = mysqli_real_escape_string($con, trim($_POST["phone"]));
    $graduation = mysqli_real_escape_string($con, trim($_POST["graduation"]));
    $gradyear = mysqli_real_escape_string($con, trim($_POST["gradyear"]));
    $gpassou = mysqli_real_escape_string($con, trim($_POST["gpassout"]));
    $masters = mysqli_real_escape_string($con, trim($_POST["masters"]));
    $myear = mysqli_real_escape_string($con, trim($_POST["myear"]));
    $mpassout = mysqli_real_escape_string($con, trim($_POST["mpassout"]));
    $mdiscipline = mysqli_real_escape_string($con, trim($_POST["mdiscipline"]));
    $doctoral = mysqli_real_escape_string($con, trim($_POST["doctoral"]));
    $dyear = mysqli_real_escape_string($con, trim($_POST["dyear"]));
    $dpassout = mysqli_real_escape_string($con, trim($_POST["dpassout"]));
    $ddisc = mysqli_real_escape_string($con, trim($_POST["ddisc"]));
    $photo = $_FILES["photo"];    

    $allowed = array('jpg', 'jpeg', 'png');

    //photo1
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


            $result = "INSERT INTO alumini VALUES (null, '$name', '$clgname' , '$gender', '$dob', '$occupation', '$compname','$oaddress','$state','$pin','$country','$paddress','$pstate','$ppincode','$pcountry','$nationality','$bloodgroup','$email','$phone','$graduation','$gradyear','$gpassout','$masters','$myear','$mpassout','$mdiscipline','$doctoral','$dyear','$dpassout','$ddisc','$photo1')";


            if (mysqli_query($con, $result)) {                
                header("Location:alumniform.php?insert=success");
            } else {
                
                echo mysqli_error($con);
                header("Location:alumniform.php?insert=failed");
            }
        }
    }
}

