<?php

error_reporting(0);

require_once "../../config.php";

if (!empty($_POST)) {

    // $PrefixsN = $_POST['PrefixsN'];
    // $PrefixsAbrr = $_POST['PrefixsAbrr'];
    
    // $isActive = $_POST['isActive'];

    //  $sql = " INSERT INTO general_perfix
    //  (perfix_code, perfix_name, perfix_abbr_name,  IsActive)
    //  VALUES($idNew, '$PrefixsN ', '$PrefixsAbrr',   $isActive);
    //  ";
     
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

sqlsrv_close($conn);

?>
