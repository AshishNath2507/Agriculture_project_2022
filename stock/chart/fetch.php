<?php

include('database_connection.php');

// if(isset($_POST["year"]))
// {
//     $query = "select * from sheet1";
//     $res = mysqli_query($con, $query);
//     $avg = 0;
//     $total = 0;
//     while ($row = mysqli_fetch_array($res)) {

//     $dt = $row['DATE'];
//     $month = date("Y-m", strtotime($dt));
//     $dt = date("Y-m", strtotime('2022-05'));

//     $maxp = $row['MAX_PRICE'];
//     $modelprice = $row['MODEL_PRICE'];
//     $modelp = $row['MODEL_PRICE'];
    
//     if ($month == $dt) {
//         $total++;

//         $avg = $avg + $modelprice;
//         $m = $month;
//     }
//     $avgfinal = $avg / $total;
//     }

//     $query = "SELECT * FROM sheet1 WHERE DATE = '$month' ORDER BY id ASC";
//     $statement = $connect->prepare($query);
//     $statement->execute();
//     $result = $statement->fetchAll();
//     foreach($result as $row)
//     {
//     $output[] = array(
//     'time'   => $row["DATE"],
//     'model_price'  => floatval($row["MODEL_PRICE"])
//     );
//     }
//     echo json_encode($output);
// }

if(isset($_POST["year"]))
{
    $query = "SELECT * FROM azax WHERE year = '".$_POST["year"]."'ORDER BY id ASC";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
    $output[] = array(
    'month'   => $row["month"],
    'potato'  => floatval($row["potato"])
    );
    }
    echo json_encode($output);
}

?>