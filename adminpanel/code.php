<?php

    session_start();
    require ('../connect.php');
    
   
    // $sl=$_GET['slno'];

    // $result = "DELETE FROM alumini WHERE slno='$sl'";

    // if (mysqli_query($con, $result)) {
    //     echo "<script>alert('Data deleted successfully')</script>";
        
    // } else {
    //     echo "<script>alert('Data not deleted')</script>";
    //     echo mysqli_error($con);
    // }


    if(isset($_POST['deleteUserButton'])){
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM alumini WHERE slno = $userid";
        $query_run = mysqli_query($con, $query);

        if($query){
            $_SESSION['status'] = "User Deleted Successfully";
            header("Location: alumnicontrol.php?user+deleted");
        }
        else{
            $_SESSION['status'] = "User Deletion Failed";
            header("Location: alumnicontrol.php?user+not+deleted");
        }
    }
?>    
