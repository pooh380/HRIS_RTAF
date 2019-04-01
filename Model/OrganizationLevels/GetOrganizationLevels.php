<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'organization_level_code',
    2   =>  'organization_level_name', 
    3   =>  'isActive',
); 
$sql ="SELECT id,organization_level_code,organization_level_name,isActive FROM organization_level";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;

$sql = "SELECT id,organization_level_code,organization_level_name,isActive FROM organization_level WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_level_code Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_level_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //organization_level_code
    $subdata[]=$row[2]; //organization_level_name  
    $subdata[]=$row[3]; //status    
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
