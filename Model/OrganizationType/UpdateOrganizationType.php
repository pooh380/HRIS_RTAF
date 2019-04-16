<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $orgTypeId = $_POST['orgTypeId'];
    $orgCategoryName = $_POST['orgCategoryName'];
    $orgTypeName = $_POST['orgTypeName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['isActendDateive'];
    $isActive = $_POST['isActive'];
    $airForce = $_POST['airForce'];
    $multiplesDay = $_POST['multiplesDay'];
    $currentOrg = $_POST['currentOrg'];


    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE organization_type
    SET organization_type_name='$orgTypeName', organization_category_id=$$orgCategoryName, airforce='$airForce', multiples_day='$multiplesDay', current_organization='$currentOrg', IsActive=$isActive
    WHERE id=$orgTypeId; ";
    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);