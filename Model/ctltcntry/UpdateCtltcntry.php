<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $ctltcntryId = $_POST['ctltcntryId'];
    $ctltcntryThName = $_POST['ctltcntryThName'];
    $ctltcntryEngName = $_POST['ctltcntryEngName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = "UPDATE HrtCountry
    SET CountryNameTh='$ctltcntryThName', CountryNameEn='$ctltcntryEngName', CountryActive=$isActive
    WHERE CountryId=$ctltcntryId; ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);