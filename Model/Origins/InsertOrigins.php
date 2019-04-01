<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $originsName = $_POST['originsName'];
    $originsAbbrName = $_POST['originsAbbrName'];
    $isActive = $_POST['isActive'];

    $sql = "INSERT INTO ganeral_origin
     (id, seq_no, origin_code, origin_name, origin_abbr_name, IsActive, created_by, cerated_date, update_by, update_date)
     VALUES(0, 0, '5', '$originsName', '$originsAbbrName', $isActive, '', '', '', ''); ";
    echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";
        ob_start();
        header("Location:hris/views/origins/index.php");
        ob_end_flush();

    } else {
        echo "บันทึกไม่ได้";
    }
}
 