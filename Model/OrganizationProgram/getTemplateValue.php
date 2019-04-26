<?php

require_once "../../config.php";
require_once "../../Controllers/API/dateformat.php";

$orgStucId = isset($_POST['orgStucId']) ? $_POST['orgStucId'] : "";
$orgLevelId = isset($_POST['orgLevelId']) ? $_POST['orgLevelId'] : "";

$sql = " SELECT OrgStruc.OrgStrucId, OrgStruc.OrgSubUnitId, OrgLevelName, OrgPartName, OrgGroupTypeName, OrgTypeName, OrgSubUnitName, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
FROM OrgStruc
JOIN OrgLevel ON OrgStruc.OrgLevelId = OrgLevel.OrgLevelId
JOIN OrgPart ON OrgStruc.OrgPartId = OrgPart.OrgPartId
JOIN OrgGroupType ON OrgStruc.OrgGroupTypeId = OrgGroupType.OrgGroupTypeId
JOIN OrgType ON OrgStruc.OrgTypeId = OrgType.OrgTypeId
JOIN OrgSubUnit ON OrgStruc.OrgSubUnitId = OrgSubUnit.OrgSubUnitId
WHERE OrgStrucId = $orgStucId AND OrgStruc.OrgLevelId = $orgLevelId; ";

$query = sqlsrv_query($conn, $sql);

// echo $sql;

// if($query){ echo "query";}else{echo "not query";}

while ($row = sqlsrv_fetch_array($query)) {
    $orgStrucId = $row['OrgStrucId'];
    $orgSubUnitId = $row['OrgSubUnitId'];
    $orgLevelName = $row['OrgLevelName'];
    $orgPartName = $row['OrgPartName'];
    $orgGroupTypeName = $row['OrgGroupTypeName'];
    $orgTypeName = $row['OrgTypeName'];
    $orgSubUnitName = $row['OrgSubUnitName'];
    $orgStrucMain =$row['OrgStrucMain'];
    $orgStrucSubMain = $row['OrgStrucSubMain'];
    $orgStrucPath = $row['OrgStrucPath'];
    $orgStrucName = $row['OrgStrucName'];
    $orgStrucActive = $row['OrgStrucActive'];

    //date
    $date = date_format($row['CreatedDate'],"d/m/Y");
    $startDate = thai_date_short($date);

}
// SELECT    organization_list_long_abbr_name, organization_type_id, organization_part_id, organization_parent_id, organization_level_id, organization_id, district_id, province_id, used_command_id, used_doc_number, used_doc_date, used_eff_date, cancelled_command_id, cancelled_doc_number, cancelled_doc_date, cancelled_eff_date, [904], is_active, created_by, created_date, modified_by, modified_date
// FROM organization_list;


$r=array("orgStrucId"=>$orgStrucId,"orgSubUnitId"=>$orgSubUnitId,"orgLevelName"=>$orgLevelName,"orgPartName"=>$orgPartName,"orgGroupTypeName"=>$orgGroupTypeName,"orgTypeName"=>$orgTypeName,
"orgSubUnitName"=>$orgSubUnitName,"orgStrucMain"=>$orgStrucMain,"orgStrucSubMain"=>$orgStrucSubMain, "orgStrucSubMain"=>$orgStrucSubMain,
"orgStrucPath"=>$orgStrucPath,"orgStrucName"=>$orgStrucName,"orgStrucActive"=>$orgStrucActive);

// echo '<pre>';
// print_r($r);
// echo '</pre>';

print(json_encode($r));


sqlsrv_close($conn);
