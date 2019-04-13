<?php

error_reporting(0);
require_once "../../config.php";


$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
$orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";

// $orgLevelId = 52;
$sql =" SELECT  organization_list_long_name, organization_type.organization_type_name,organization_part.organization_part_name,organization_level.organization_level_name
FROM organization_list 
JOIN  organization_type ON organization_list.organization_type_id = organization_type.id 
JOIN  organization_part on organization_list.organization_part_id = organization_part.id
JOIN  organization_level on organization_list.organization_level_id = organization_level.id
WHERE organization_list.organization_type_id  = $orgTypeId and organization_list.id = $orgListId ;" ;

$query = sqlsrv_query($conn, $sql);

// if($query){ echo "query";}else{echo "not query";}

while ($row = sqlsrv_fetch_array($query)) {
  
    $orgListLong = $row['organization_list_long_name'];
    $orgType = $row['organization_type_name'];
    $orgPartName = $row['organization_part_name'];
    $orgaLevelName = $row['organization_level_name'];
    
}
// SELECT    organization_list_long_abbr_name, organization_type_id, organization_part_id, organization_parent_id, organization_level_id, organization_id, district_id, province_id, used_command_id, used_doc_number, used_doc_date, used_eff_date, cancelled_command_id, cancelled_doc_number, cancelled_doc_date, cancelled_eff_date, [904], is_active, created_by, created_date, modified_by, modified_date
// FROM organization_list;


$r=array("orgListLong"=>$orgListLong,
"orgType"=>$orgType, 
"orgPartName"=>$orgPartName,"orgaLevelName"=>$orgaLevelName);

// echo '<pre>';
// print_r($r);
// echo '</pre>';

print(json_encode($r));


sqlsrv_close($conn);
