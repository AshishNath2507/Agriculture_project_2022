<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Informations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <?php include "header.php"; ?>
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <input class="form-control" type="file" id="input" accept=".xls,.xlsx">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" id="button">Convert</button>
            </div>
            <div class="col-md-12">
                <pre id="jsondata"></pre>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <link rel="stylesheet" href="../css/demo.css">
    <link rel="stylesheet" href="../css/cs.css">
    <script src="../demo.js"></script>
</body>

</html>