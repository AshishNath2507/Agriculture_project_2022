

<?php
session_start();
require "../../connect.php";

// Student approval
if (isset($_POST['apprStuButton'])) {
    
    $userid = $_POST['appr_id'];
    $query = mysqli_query($con, "SELECT * FROM students WHERE std_id = $userid");
    $row = mysqli_fetch_array($query);

    if ($row['status'] == "approved") {
        $_SESSION['message'] = "User is already approved";
        header("Location: ../stuctrl.php?user=already+approved");
    } else if ($row['status'] == "pending") {
        $result = mysqli_query($con, "UPDATE `students` SET `status` = 'approved' WHERE `students`.`std_id` = $userid");
        $_SESSION['message'] = "User verified successfully";
        header("Location: ../stuctrl.php?user=approved");
    } else {
        $_SESSION['message'] = "User Approval Failed";
        header("Location: ../stuctrl.php?user=not+approved");
    }    
}

// Faculty Approval
if (isset($_POST['apprFacButton'])) {
    
    $userid = $_POST['appr_id'];
    $query = mysqli_query($con, "SELECT * FROM faculty WHERE fac_id = $userid");
    $row = mysqli_fetch_array($query);

    if ($row['status'] == "approved") {
        $_SESSION['message'] = "User is already approved";
        header("Location: ../facctrl.php?user=already+approved");
    } else if ($row['status'] == "pending") {
        $result = mysqli_query($con, "UPDATE `faculty` SET `status` = 'approved' WHERE `faculty`.`fac_id` = $userid");
        $_SESSION['message'] = "User verified successfully";
        header("Location: ../facctrl.php?user=approved");
    } else {
        $_SESSION['message'] = "User Approval Failed";
        header("Location: ../facctrl.php?user=not+approved");
    }    
}
?>
