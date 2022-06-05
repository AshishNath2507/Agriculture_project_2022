<?php

    session_start();
    require ('../../connect.php');


    if(isset($_POST['deleteUserButton'])){
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM students WHERE std_id = $userid";
        $query_run = mysqli_query($con, $query);

        if($query){
            $_SESSION['status'] = "User Deleted Successfully";
            header("Location: stuctrl.php?user+deleted");
        }
        else{
            $_SESSION['status'] = "User Deletion Failed";
            header("Location: stuctrl.php?user+not+deleted");
        }
    }
?>   