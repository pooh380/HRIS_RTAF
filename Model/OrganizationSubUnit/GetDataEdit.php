<?php


require_once "../../config.php";

$OrgSubUnitId = $_POST["OrgSubUnitId"];

$id = "";
$OrgSubUnitName = "";
$OrgSubUnitAbbr = "";
$OrgSubUnitSemiAbbr = "";
$OrgSubUnitActive = "";
// echo $originsId ;

if(isset($OrgSubUnitId)){
    $sql = "SELECT OrgSubUnitId, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitCreateBy, OrgSubUnitCreateDate, OrgSubUnitUpdateBy, OrgSubUnitUpdateDate
    FROM OrgSubUnit
    where OrgSubUnitId = $OrgSubUnitId ; ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['OrgSubUnitId'];
        $OrgSubUnitName = $row['OrgSubUnitName'];
        $OrgSubUnitAbbr = $row['OrgSubUnitAbbr'];
        $OrgSubUnitSemiAbbr = $row['OrgSubUnitSemiAbbr'];
        $OrgSubUnitActive = $row['OrgSubUnitActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"OrgSubUnitName"=>$OrgSubUnitName,"OrgSubUnitAbbr"=>$OrgSubUnitAbbr,"OrgSubUnitSemiAbbr"=>$OrgSubUnitSemiAbbr,
    "OrgSubUnitActive"=>$OrgSubUnitActive);
    //"ค่า$ในนี้"=>ค่า$ในController,
    print(json_encode($r));
}

sqlsrv_close($conn);
