<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $religionsName = $_POST['religionsName'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO ganaral_religion
    (id, seq_no, ReligionCode, ReligionName, IsActive)
    VALUES( 2, 2, 2, '$religionsName', $isActive);
     ";
    echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>