<?php

    if(isset($_POST['submit'])){
        $file = $_POST['file'];

        $json_file = json_encode($file);
        echo $json_file;
    }
    else{
        error_reporting(E_ALL);
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Convert excel to JSON Object</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script> -->
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <form action="json.php" method="post" enctype="multipart/form-data">
                <div class="col">
                    <input class="form-control" name="file" type="file" id="input" accept=".xls,.xlsx">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary" id="button">Convert</button>
                </div>
                <div class="col-md-12">
                    <pre id="jsondata"></pre>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- <script src="excel.js"></script> -->

</html>