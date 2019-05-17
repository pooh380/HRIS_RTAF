<?php

error_reporting(0);

require_once "../../config.php";

if (!empty($_POST)) {

    // $PrefixsN = $_POST['PrefixsN'];
    // $PrefixsAbrr = $_POST['PrefixsAbrr'];
    
    // $isActive = $_POST['isActive'];

     $sql = " SELECT * FROM position";
     
    sqlsrv_query($conn, $sql);
}

sqlsrv_close($conn);

?>