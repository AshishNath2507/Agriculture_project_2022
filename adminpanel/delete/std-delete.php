<?php

    session_start();
    require ('../../connect.php');

    // Student delete
    if(isset($_POST['deleteStdButton'])){
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM students WHERE std_id = $userid";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['status'] = "User Deleted Successfully";
            header("Location: ../stuctrl.php?user+deleted");
        }
        else{
            $_SESSION['status'] = "User Deletion Failed";
            header("Location: ../stuctrl.php?user+not+deleted");
        }
    }

    // Faculty delete
    if(isset($_POST['deleteFacButton'])){
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM faculty WHERE fac_id = $userid";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['status'] = "User Deleted Successfully";
            header("Location: ../facctrl.php?user+deleted");
        }
        else{
            $_SESSION['status'] = "User Deletion Failed";
            header("Location: ../facctrl.php?user+not+deleted");
        }
    }


?>   