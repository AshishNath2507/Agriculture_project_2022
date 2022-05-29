<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/cs.css">

    <!-- jQuery dataTable cdns -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./adminpanel/DataTables/datatables.js"></script>
    <script src="./adminpanel/DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <link rel="stylesheet" href="./adminpanel/DataTables/datatables.min.css">
    <link rel="stylesheet" href="./adminpanel/DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">

    <title>View Students</title>
</head>

<body>

    <?php include("header.php"); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        
        
        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                <h1 class="h3 mb-0 text-gray-800">View Students</h1>
    
            </div>
            <div class="card-header py-3">
                <!-- <h3 class="m-0 font-weight-bold text-primary">Student Table</h3> -->
                <h4><a style="color: blue;" href="addstd.php">Add Students</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered std_table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td> #</td>
                                <td>Name</td>
                                <td>Branch</td>
                                <td>Year</td>
                                <td>E-mail</td>
                                <td>Phone</td>
                                <td>Address</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            require 'connect.php';
                            $result = mysqli_query($con, "SELECT * FROM students WHERE status = 'approved'");
                            while ($row = mysqli_fetch_array($result)) {
                                echo '
                                            <tr>
                                                <td>'.$row['std_id'].'</td>
                                                <td>' . $row["name"] . '</td>
                                                <td>' . $row["branch"] . '</td>
                                                <td>' . $row["year"] . '</td>
                                                <td>' . $row["email"] . '</td>
                                                <td>' . $row["phone"] . '</td>
                                                <td>' . $row["addr"] . '</td>
                                            </tr>

                                    ';
                            }
                            ?>
        <!-- UPDATE `students` SET `status` = 'approved' WHERE `students`.`std_id` = 2;  -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


    
    <!-- End of Main Content -->

    <!-- Footer -->
    <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer> -->
    <!-- End of Footer -->

    
    <!-- End of Content Wrapper -->

    
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> -->

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <?php
        include "footer.php";
    ?>

    <script>
        $(document).ready(function() {
            $('.std_table').DataTable();
        });
    </script>



    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $("a.action").click(function(e) {
                if (!confirm('Are you sure?')) {
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        });
    </script>

</body>

</html>