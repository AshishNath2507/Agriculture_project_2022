<?php include "../connect.php"; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Charts</title>
    <link rel="stylesheet" href="../css/demo.css">
    <link rel="stylesheet" href="../css/cs.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['month', 'potato', 'onion', 'beet'],

                <?php
                $query = "select * from sheet3";
                $res = mysqli_query($con, $query);
                while ($data = mysqli_fetch_array($res)) {
                    $month = $data['MONTH'];
                    $potato = $data['POTATO'];
                    $onion = $data['ONION'];
                    $beet = $data['BEET'];
                ?>

                ['<?php echo $month; ?>', <?php echo $potato; ?>, <?php echo $onion; ?>, <?php echo $beet; ?>],

                <?php
                }
                ?>
            ]);
            var options = {
                hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Model Price'
                },
                chart: {
                    title: 'Stock Management',
                    subtitle: 'Average price of an item',
                },
                bars: 'vertical' // Required for Material Bar Charts.
            };
            var chart = new google.charts.Bar(document.getElementById('barchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>

<body>
    <?php include "./header.php"; ?>
    <br>
    <br>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
    <br>
    <br>
    <?php include "../footer.php"; ?>
    <script src="../demo.js"></script>
</body>

</html>