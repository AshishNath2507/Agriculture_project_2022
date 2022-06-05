

<?php
session_start();
require "../../connect.php";

if (isset($_POST['apprUserButton'])) {
    
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
?>
