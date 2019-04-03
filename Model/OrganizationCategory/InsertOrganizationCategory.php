<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $OrganizationcategoryFN = $_POST['OrganizationcategoryFN'];
    $OrganizationcategoryIN = $_POST['OrganizationcategoryIN'];
    $isActive = $_POST['isActive'];
     $sql ="INSERT INTO organization_category
     (organization_category_code, organization_category_name, organization_category_abbr_name, IsActive, created_by, created_date, update_by, update_date)
     VALUES('', '$OrganizationcategoryFN', '$OrganizationcategoryIN', $isActive, 0, '', 0, '') ";
    
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>
