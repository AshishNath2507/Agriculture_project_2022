
<?php
session_start();
session_unset(); // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();  unset($_SESSION["nome"]);**
header("Location: ../index.php");
?>
