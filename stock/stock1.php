<?php
require "../connect.php";
if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $district = $_POST['district'];
    $commodity = mysqli_real_escape_string($con, trim($_POST['commodity']));
    $arival = mysqli_real_escape_string($con, trim($_POST['arival']));
    $min = mysqli_real_escape_string($con, trim($_POST['minprice']));
    $max = mysqli_real_escape_string($con, trim($_POST['maxprice']));
    $model = mysqli_real_escape_string($con, trim($_POST['modelprice']));

    $sql = "INSERT INTO sheet1 VALUES (null, '$date','$district', '$commodity', '$arival', '$min', '$max', '$model')";
    $query = mysqli_query($con, $sql);
    if($query){
        header("Location: stockmain.php?data=stored");
    }
    else{
        echo "<script>alert('Data Not Stored')</script>";
        echo mysqli_error($con);
    }
}