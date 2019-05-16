<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $personTypesId = $_POST['personTypesId'];
    $personTypeName = $_POST['personTypeName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE PersonType
    SET HrtPersonTypeName='$personTypeName', HrtPersonTypeActive=$isActive
    WHERE HrtPersonTypeId=$personTypesId;
     ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);