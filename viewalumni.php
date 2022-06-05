<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- jQuery dataTable cdns -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./adminpanel/DataTables/datatables.js"></script>
    <script src="./adminpanel/DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <link rel="stylesheet" href="./adminpanel/DataTables/datatables.min.css">
    <link rel="stylesheet" href="./adminpanel/DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/cs.css">
    <title>View Students</title>
    <style>
        td{
            max-width: 100px;
            text-overflow: ellipsis;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Alumni</h1>
        </div>
            <div class="card-header py-3">
                <!-- <h3 class="m-0 font-weight-bold text-primary">Alumni Table</h3> -->
                <h4><a style="color: green;" href="alumniadd.php">Add Alumni</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="alumni" class="table compact display order-column cell-border">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'connect.php';
                            $result = mysqli_query($con, "SELECT * FROM alumini ORDER BY slno ASC");
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td> <?php echo $row["slno"]  ?> </td>
                                    <td><img src="<?php echo './' . $row["photo"]; ?>" alt="image" style="width:50px;"></td>
                                    <td> <?php echo $row["name"] ?></td>
                                    <td> <?php echo $row["occupation"] ?> </td>
                                    <td> <?php echo $row["organization"] ?> </td>
                                    <td title="<?php echo $row["o_address"] ?>"> <?php echo $row["o_address"] ?> </td>
                                    <td> <?php echo $row["state"] ?> </td>
                                    <td title="<?php echo $row["email"] ?>"> <?php echo $row["email"] ?> </td>
                                    <td> <?php echo $row["phone"] ?> </td>
                                </tr>
                            <?php
                            };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php"; ?>
    <!-- End of Footer -->

    <!-- Datatable -->
    <script>
        $(document).ready(function() {
            $('#alumni').DataTable();
        });
    </script>

   

</body>

</html>