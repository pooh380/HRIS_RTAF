<?php

error_reporting(0);

require_once "../../config.php";

// $orgTypeId = $_POST["orgTypeId"] = 25;

$orgTypeId = $_POST["orgTypeId"];
$id = "";
$originName = "";
$originAbbrName = "";
$IsActive = "";
// echo $originsId ;

if(isset($orgTypeId)){
    $sql = " SELECT organization_type.id as OrgTypeId, organization_type_code, organization_type_name, organization_type_abbr_name, organization_category_id,organization_category.organization_category_name
    FROM organization_type 
    JOIN organization_category 
    ON organization_type.organization_category_id = organization_category.id
    where organization_type.id = $orgTypeId; ";

    // echo $sql."<br>";

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $OrgTypeId = $row['OrgTypeId'];
        $orgTypeName = $row['organization_type_name'];
        $orgCategoryId = $row['organization_category_id'];
        $orgCategoryName = $row['organization_category_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("OrgTypeId"=>$OrgTypeId,"orgTypeName"=>$orgTypeName,"orgCategoryId"=>$orgCategoryId,"orgCategoryName"=>$orgCategoryName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>