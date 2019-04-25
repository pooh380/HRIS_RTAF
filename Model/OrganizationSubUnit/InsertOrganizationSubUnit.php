<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $OrgSubUnitName = $_POST['OrgSubUnitName'];
    $OrgSubUnitAbbr = $_POST['OrgSubUnitAbbr'];
    $OrgSubUnitSemiAbbr = $_POST['OrgSubUnitSemiAbbr'];
    $isActive = $_POST['isActive'];

    // $OrganizationcategoryIN = $_POST['OrganizationcategoryIN'];
    $isActive = $_POST['isActive'];
     $sql =" INSERT INTO OrgSubUnit
     (OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitCreateBy, OrgSubUnitCreateDate, OrgSubUnitUpdateBy, OrgSubUnitUpdateDate)
     VALUES('$OrgSubUnitName', '$OrgSubUnitAbbr', '$OrgSubUnitSemiAbbr', $isActive, 0, '', 0, '');";
    
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>
