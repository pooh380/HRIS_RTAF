<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization; ";

    echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }

    $orgname = $_POST['orgname'];
    $orgAbbrname = $_POST['orgAbbrname'];
    $isActive = $_POST['isActive'];

    $sql = " insert into organization (organization_code, organization_name, organization_abbr_name, airforce, IsActive)
    values ($idNew, '$orgname', ' $orgAbbrname','','$isActive');";
    
    // echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        // echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>