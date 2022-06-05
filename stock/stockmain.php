<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- jQuery dataTable cdns -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./DataTables/datatables.js"></script>
    <script src="./DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <link rel="stylesheet" href="./DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">
    <!-- Custom css files -->
    <link rel="stylesheet" href="../css/demo.css">
    <link rel="stylesheet" href="../css/cs.css">
</head>

<body>

    <?php include "./header.php"; ?>

    <div class="body-container">
        <div class="stock-container">
            <h1>Enter the stock data here!</h1>
            <form action="stock1.php" method="POST" class="stock-form">
                <div class="entry">
                    <label for="date">Date :-</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="entry">
                    <label for="district">District :-</label>
                    <select name="district" class="select">
                        <option value="select">--Select--</option>
                        <option value="Charaideo">Charaideo</option>
                        <option value="Dhemaji">Dhemaji</option>
                        <option value="Dibrugarh">Dibrugarh</option>
                        <option value="Golaghat">Golaghat</option>
                        <option value="Jorhat">Jorhat</option>
                        <option value="Lakhimpur">Lakhimpur</option>
                        <option value="Majuli">Majuli</option>
                        <option value="Sivasagar">Sivasagar</option>
                        <option value="Tinsukia">Tinsukia</option>
                    </select>
                </div>
                <div class="entry">
                    <label for="commodity">Commodity :-</label>
                    <input type="text" name="commodity" id="commodity">
                </div>
                <div class="entry">
                    <label for="arival">Arival :-</label>
                    <input type="text" name="arival" id="arival">
                </div>
                <div class="entry">
                    <label for="minprice">Min-price :-</label>
                    <input type="text" name="minprice" id="minprice">
                </div>
                <div class="entry">
                    <label for="maxprice">Max-price :-</label>
                    <input type="text" name="maxprice" id="maxprice">
                </div>
                <div class="entry">
                    <label for="modelprice">Model-price :-</label>
                    <input type="text" name="modelprice" id="modelprice">
                </div>
                <div class="stock-btn">
                    <button type="submit" name="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>

        <div class="icon-container">
            <div class="icon1 chart">
                <i class="i1 fa-solid fa-chart-line fa-2x"></i>
                <span class="i2">Chart</span>
                <a class="i3" href="./chart.php"><i class="fa-solid fa-arrow-right fa-3x fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;"></i></a>
            </div>
            <div class="icon2 upload">
                <i class="i1 fa-solid fa-upload fa-2x"></i>
                <span class="i2 upl">Upload/Import</span>
                <a class="i3" href=""><i class="fa-solid fa-arrow-right fa-3x fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;"></i></a>
            </div>
            <div class="icon2 upload">
                <i class="i1 fa-solid fa-upload fa-2x"></i>
                <span class="i2 upl">Stock Table</span>
                <a class="i3" href="./chart/index.php"><i class="fa-solid fa-arrow-right fa-3x fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;"></i></a>
            </div>
        </div>
    </div>

    <?php include "./footer.php"; ?>
    <link rel="stylesheet" href="../css/stock.css">

    <script src="../demo.js"></script>
</body>

</html>