<?php


require_once "../../config.php";

$orgGroupTypeId = $_POST["orgGroupTypeId"];

$id = "";
$orgGroupTypeName = "";
$IsActive = "";
// echo $originsId ;

if(isset($orgGroupTypeId)){
    $sql = "SELECT OrgTypeId, OrgTypeName, OrgTypeActive, OrgTypeCreateBy, OrgTypeCreateDate, OrgTypeUpdateBy, OrgTypeUpdateDate
    FROM OrgGroupType where OrgTypeId = $orgGroupTypeId ; ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['OrgTypeId'];
        $orgGroupTypeName = $row['OrgTypeName'];
        $IsActive = $row['OrgTypeActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"orgGroupTypeName"=>$orgGroupTypeName,"IsActive"=>$IsActive);
    //"ค่า$ในนี้"=>ค่า$ในController,
    print(json_encode($r));
}

sqlsrv_close($conn);
?>