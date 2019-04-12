<?php

require_once "../../config.php";


$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
$orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";
$orgLevelId = isset($_POST['orgLevelId']) ? $_POST['orgLevelId'] : "";


$sql = " SELECT  *  FROM organization_list WHERE id =$orgLevelId; ";

$query = sqlsrv_query($conn, $sql);

// if($query){ echo "query";}else{echo "not query";}

while ($row = sqlsrv_fetch_array($query)) {
    $id = $row['id'];
    $orglistCode = $row['organization_list_code'];
    $divisionID = $row['division_id'];
    $orgListAbbr = $row['organization_list_abbr_name'];
    $orgListLong = $row['organization_list_long_name'];
    $orgListAbbrLong = $row['organization_list_long_abbr_name'];
    $orgListAbbrLongAbbr =$row['organization_list_semi_abbr_name'];

    // $originName = $row['origin_name'];
    // $originAbbrName = $row['origin_abbr_name'];
    // $IsActive = $row['IsActive'];
    // echo $id;
    // echo $originName;
    // echo $originAbbrName;
    // echo $IsActive;
}
// SELECT   organization_list_name, organization_list_long_abbr_name, organization_type_id, organization_part_id, organization_parent_id, organization_level_id, organization_id, district_id, province_id, used_command_id, used_doc_number, used_doc_date, used_eff_date, cancelled_command_id, cancelled_doc_number, cancelled_doc_date, cancelled_eff_date, [904], is_active, created_by, created_date, modified_by, modified_date
// FROM organization_list;


$r=array("id"=>$id,"orglistCode"=>$orglistCode,"divisionID"=>$divisionID,"orgListAbbr"=>$orgListAbbr,"orgListLong"=>$orgListLong,"orgListAbbrLong"=>$orgListAbbrLongAbbr,"orgListAbbrLongAbbr"=>$orgListAbbrLong);
print(json_encode($r));


sqlsrv_close($conn);
?>