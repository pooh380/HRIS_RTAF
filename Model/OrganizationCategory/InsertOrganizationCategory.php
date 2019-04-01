<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $OrganizationcategoryFN = $_POST['OrganizationcategoryFN'];
    $OrganizationcategoryIN = $_POST['OrganizationcategoryIN'];
    $isActive = $_POST['isActive'];

     $sql = " INSERT INTO organization_category
    (  organization_category_name, organization_category_abbr_name, isActive)
    VALUES( '$OrganizationcategoryFN', '$OrganizationcategoryIN', $isActive);";
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>
