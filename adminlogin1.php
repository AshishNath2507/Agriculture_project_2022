

<?php 

    session_start();
    $_SESSION['admin-name']= 'uname';

    require ("connect.php");

    $name = $_POST["uname"];
    $pswd = $_POST["pswd"];

    $result = mysqli_query($con, "select * from admin where uname = '$name'");
    $row = mysqli_fetch_array($result);

    if($row['pswd'] == $pswd) {
        $_SESSION['uname'] = $uname;
        header("Location:adminpanel/index.php?status=login");
    }
    else{
        header("Location:demo.php?err=wrong+credentials");
    }


?>    