<?php

require_once "../../config.php";
require_once "../../Controllers/API/dateformat.php";

$orgStucId = isset($_POST['orgStucId']) ? $_POST['orgStucId'] : "";
$orgLevelId = isset($_POST['orgLevelId']) ? $_POST['orgLevelId'] : "";

$sql = " SELECT OrgStrucId, OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
FROM OrgStruc WHERE OrgStrucId = $orgStucId AND OrgLevelId = $orgLevelId";

$query = sqlsrv_query($conn, $sql);

echo $sql;

// if($query){ echo "query";}else{echo "not query";}

while ($row = sqlsrv_fetch_array($query)) {
    $id = $row['id'];
    $orglistCode = $row['organization_list_code'];
    $divisionID = $row['division_id'];
    $orgListAbbr = $row['organization_list_abbr_name'];
    $orgListLong = $row['organization_list_long_name'];
    $orgListAbbrLong = $row['organization_list_long_abbr_name'];
    $orgListAbbrLongAbbr =$row['organization_list_semi_abbr_name'];
    $orgType = $row['organization_type_name'];
    $divisionAbbrName = $row['division_abbr_name'];
    $orgListName = $row['organization_list_name'];
    $orgPartName = $row['organization_part_name'];
    $orgaLevelName = $row['organization_level_name'];

    //date
    $date = date_format($row['CreatedDate'],"d/m/Y");
    $startDate = thai_date_short($date);

}
// SELECT    organization_list_long_abbr_name, organization_type_id, organization_part_id, organization_parent_id, organization_level_id, organization_id, district_id, province_id, used_command_id, used_doc_number, used_doc_date, used_eff_date, cancelled_command_id, cancelled_doc_number, cancelled_doc_date, cancelled_eff_date, [904], is_active, created_by, created_date, modified_by, modified_date
// FROM organization_list;


$r=array("id"=>$id,"orglistCode"=>$orglistCode,"divisionID"=>$divisionID,"orgListAbbr"=>$orgListAbbr,"orgListLong"=>$orgListLong,
"orgListAbbrLongAbbr"=>$orgListAbbrLongAbbr,"orgListAbbrLong"=>$orgListAbbrLong,"orgType"=>$orgType, "orgListName"=>$orgListName,
"orgPartName"=>$orgPartName,"orgaLevelName"=>$orgaLevelName,"divisionAbbrName"=>$divisionAbbrName,"startDate"=>$startDate);

// echo '<pre>';
// print_r($r);
// echo '</pre>';

print(json_encode($r));


sqlsrv_close($conn);
