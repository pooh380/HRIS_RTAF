<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $organizationPartName = $_POST['organizationPartName'];
    $organizationPartAbbrName = $_POST['organizationPartAbbrName'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO organization_part
    (organization_part_code, organization_part_name, organization_part_abbr_name, IsActive, created_by, created_date, update_by, update_date)
    VALUES('', '$organizationPartName', '$organizationPartAbbrName', $isActive, '', '', '', '');     ";
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>