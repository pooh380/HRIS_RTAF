<?php

// error_reporting(0);

require_once "../../config.php";

// $_POST["originsId"] = 0;

$armyId = $_POST["armyId"];
$id = "";
$armyName = "";
$armyAbbrName = "";
$IsActive = "";
// echo $armyId  ;

if(isset($armyId)){
    $sql = " SELECT HrtArmId, HrtArmName, HrtArmAbbr, HrtArmActive FROM HrtArm  where HrtArmId = $armyId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['HrtArmId'];
        $armyName = $row['HrtArmName'];
        $armyAbbrName = $row['HrtArmAbbr'];
        $IsActive = $row['HrtArmActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"armyName"=>$armyName,"armyAbbrName"=>$armyAbbrName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>