<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart', 'line']
        });
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'Dogs');

            data.addRows([

                <?php
                require "../connect.php";
                $sql = "SELECT * FROM sheet1 WHERE DISTRICT=jorhat";
                $query = mysqli_query($con, $sql);
                while ($result = mysqli_fetch_assoc($query)) {
                    echo "['" . $result['DISTRICT'] . "', " . $result['MODEL_PRICE'] . "]";
                   
                }
                ?>
                // [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
                // [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
                // [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
                // [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
                // [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
                // [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
                // [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
                // [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
                // [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
                // [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
                // [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
                // [66, 70], [67, 72], [68, 75], [69, 80]
            ]);

            var options = {
                hAxis: {
                    title: 'Time'
                },
                vAxis: {
                    title: 'Popularity'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
    <div id="chart_div"></div>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Chart website link: https://developers-dot-devsite-v2-prod.appspot.com/chart/interactive/docs/gallery/linechart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                // ['Year', 'Sales', 'Expenses'],
                ['District', 'Model price'],

                <?php
                    require "../connect.php";
                    $sql = "SELECT * FROM sheet1";
                    $query = mysqli_query($con, $sql);
                    while ($result = mysqli_fetch_assoc($query)) {
                        echo "['".$result['DISTRICT']."', ".$result['MODEL_PRICE']."]";
                    }
                ?>

                // ['2004', 1000, 400],
                // ['2005', 1170, 460],
                // ['2006', 660, 1120],
                // ['2007', 1030, 540]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>