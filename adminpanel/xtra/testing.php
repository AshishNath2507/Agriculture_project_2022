

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
    <script src="./DataTables/datatables.js"></script>
    <!-- <script src="./DataTables/datatables.min.js"></script> -->
    <script src="./DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="./DataTables/datatables.css"> -->
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <link rel="stylesheet" href="./DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">


</head>

<body>


    <table id="alumni" class="display">
        <thead>
            <tr>
                <th>Slno</th>
                <th>Image</th>
                <th>Name</th>
                
                <th>Occupation</th>
                <th>Organization</th>
                <th>Office/Present Address</th>
                <th>State</th>
               
               
                <th>Email ID</th>
                <th>Mobile Number</th>
                <th>Actions</th>
                
               
            </tr>
        </thead>

        <tbody>
        <?php
            require '../connect.php';
            $result = mysqli_query($con, "select * from alumini");
            while ($row = mysqli_fetch_array($result)) {

        ?>
            <tr>
                <td> <?php echo $row["slno"]  ?> </td>
                <td> <?php echo $row["photo"]  ?> </td>
                <td> <?php echo $row["name"]  ?> </td>
                
                <td> <?php echo $row["occupation"]  ?> </td>
                <td> <?php echo $row["organization"]  ?> </td>
                <td> <?php echo $row["o_address"]  ?> </td>
                <td> <?php echo $row["state"]  ?> </td>
                
                <td> <?php echo $row["email"]  ?> </td>
                <td> <?php echo $row["phone"]  ?> </td>
                   
            </tr>
        <?php
        };
        ?>
        </tbody>

    </table>

    <script>
        $(document).ready(function() {
            $('#alumni').DataTable();
        });
    </script>
    
</body>

</html>