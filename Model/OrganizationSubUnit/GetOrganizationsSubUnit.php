<?php

error_reporting(0);

// require_once "../../config.php";
require_once "../../config2.php";


$orgLevelId = isset($_POST['orgLevId']) ? $_POST['orgLevId'] : "";
 
$request=$_REQUEST;
$col =array(
    0   =>  'Org'.$orgLevelId.'Id',
    1   =>  'Org'.$orgLevelId.'Name',
    2   =>  'Org'.$orgLevelId.'Abbr',
    3   =>  'Org'.$orgLevelId.'SemiAbbr',
    4   =>  'Org'.$orgLevelId.'Active',
  
); 


$sql = " SELECT Org".$orgLevelId."Id, Org".$orgLevelId."Name, Org".$orgLevelId."Abbr, Org".$orgLevelId."SemiAbbr, Org".$orgLevelId."Active FROM Org".$orgLevelId." ORDER BY Org".$orgLevelId."Id OFFSET 0 ROWS FETCH NEXT 10 ROWS ONLY; "; 
// echo $sql;

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;

$sql = " SELECT Org".$orgLevelId."Id, Org".$orgLevelId."Name, Org".$orgLevelId."Abbr, Org".$orgLevelId."SemiAbbr, Org".$orgLevelId."Active FROM Org".$orgLevelId." WHERE 1=1 ";

if (!empty($request['search']['value'])) {
    $sql .= " AND (Org".$orgLevelId."Name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR Org".$orgLevelId."AbbrLike N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR Org".$orgLevelId."SemiAbbr Like N'%" . $request['search']['value'] . "%') ";
    //หากเลือกselect2 ต้อง เพิ่มor ใน นี้ด้วย
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}


$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[] = '
    <a href="../../Views/OrganizationsSubUnit/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="DeleteOrganizationSubUnit('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[]=$row[0]; 
    $subdata[]=$row[1]; //OrgSubUnitName
    $subdata[]=$row[2]; //OrgSubUnitAbbr
    $subdata[]=$row[3]; //OrgSubUnitSemiAbbr 
    if($row[4] != 1){
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    }else{
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    }//OrgSubUnitActive       
    // $subdata[]=$row[5]; //modified_by
    // $subdata[]=$row[6]; //modified_date 
    // $subdata[]=$row[7]; //modified_date 
    // $subdata[]=$row[8]; //modified_date          
    $data[]=$subdata;
}
$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>



