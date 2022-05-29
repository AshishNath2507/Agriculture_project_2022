<?php
    require "../connect.php";
    $sql = "SELECT * FROM sheet3";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
    $date = $row['MONTH'];
    $monthly = date('F', strtotime($date));
    $full = $monthly;

    foreach ($query as $data) {
        $month = $data['MONTH'];
        $amount = $data['MODEL_PRICE'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

    <div style="width: 500px;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        const labels = [
            <?php echo $row['MONTH']; ?>
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [
                    <?php echo $row['MODEL_PRICE']; ?>
                ],
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                // scales: {
                //     beginAtZero: true
                // }
            }
        };


        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
</body>

</html>