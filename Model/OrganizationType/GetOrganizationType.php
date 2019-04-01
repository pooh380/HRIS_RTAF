<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'seq_no',
    1   =>  'organization_type_name',
    2   =>  'organization_type_code',
    3   =>  'isActive',
    4   =>  'start_date',
    5   =>  'end_date',
); 

$sql ="SELECT seq_no,organization_type_code, organization_type_name, isActive,  start_date, end_date FROM organization_type ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = "SELECT seq_no,organization_type_code, organization_type_name, isActive,  start_date, end_date FROM organization_type  WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_type_code Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_type_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //seq_no
    $subdata[]=$row[1]; //organization_type_code
    $subdata[]=$row[2]; //organization_type_name
    $subdata[]=$row[3]; //status
    $subdata[]=$row[4]; //start_date   
    $subdata[]=$row[5]; //end_date   
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
