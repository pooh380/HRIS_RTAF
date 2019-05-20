<?php

error_reporting(0);

require_once "../../config.php";

// $_POST["originsId"] = 0;

$ctltcntryId = $_POST["ctltcntryId"];
$id = "";
$ctltcntryThName = "";
$ctltcntryEngName = "";
$IsActive = "";
// echo $originsId ;

if(isset($ctltcntryId)){
    $sql = "  SELECT CountryId, CountryNameTh, CountryNameEn,CountryActive FROM HrtCountry where CountryId = $ctltcntryId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['CountryId'];
        $ctltcntryThName = $row['CountryNameTh'];
        $ctltcntryEngName = $row['CountryNameEn'];
        $IsActive = $row['CountryActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"ctltcntryThName"=>$ctltcntryThName,"ctltcntryEngName"=>$ctltcntryEngName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>