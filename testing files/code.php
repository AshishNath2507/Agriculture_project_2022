
<?php

session_start();

require '../connect.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST["import_file_btn"])) {
    $allowed_ext = ['xls', 'csv', 'xlsx'];
    $filename = $_FILES['input_file']['name'];

    $checking = explode(".", $filename);
    $file_ext = end($checking);

    if (in_array($file_ext, $allowed_ext)) {
        $targetPath = $_FILES['import_file']['temp_name'];
        /** Load $inputFileName to a Spreadsheet object **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data = $spreadsheet -> getActiveSheet() -> toArray();
        foreach($data as $row){
            $id = $row[0];
            $id = $row[0];
            $id = $row[0];
            $id = $row[0];

            // $check = ;
        }
    } else {
        $_SESSION['status'] = "Invalid file";
        header("Location: phpss.php");
        exit(0);
    }
}

