<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $orgCategoryName = $_POST['orgCategoryName'];
    $orgTypeName = $_POST['orgTypeName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['isActendDateive'];
    $isActive = $_POST['isActive'];
    $airForce = $_POST['airForce'];
    $multiplesDay = $_POST['multiplesDay'];
    $currentOrg = $_POST['currentOrg'];



    
    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization_type; ";

    // echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }

    $sql="INSERT INTO organization_type
    (organization_type_code, organization_type_name, organization_type_abbr_name, organization_category_id, airforce, multiples_day, current_organization, IsActive, created_by, created_date, update_by, update_date)
    VALUES('$idNew', '$orgTypeName', '', $orgCategoryName, '$airForce', '$multiplesDay', '$currentOrg', $isActive, 0, '', 0, '');
    ";
    
    echo $sql;

    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>