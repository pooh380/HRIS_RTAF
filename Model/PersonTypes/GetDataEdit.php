<?php

error_reporting(0);

require_once "../../config.php";

// $_POST["originsId"] = 0;

$personTypesId = $_POST["personTypesId"];
$id = "";
$personTypeName = "";
$IsActive = "";
// echo $originsId ;

if(isset($personTypesId)){
    $sql = "SELECT  HrtPersonTypeId, HrtPersonTypeName,HrtPersonTypeActive
    FROM PersonType where HrtPersonTypeId = $personTypesId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['HrtPersonTypeId'];
        $personTypeName = $row['HrtPersonTypeName'];
        $IsActive = $row['HrtPersonTypeActive'];
    }

    $r=array("id"=>$id,"personTypeName"=>$personTypeName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>