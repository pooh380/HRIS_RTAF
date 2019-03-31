<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'origin_code',
    2   =>  'origin_name',
    3   =>  'status',
); 
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql ="SELECT id,origin_code, origin_name,status
FROM ganeral_origin";





$query=sqlsrv_query($conn,$sql, $params, $options);

$totalData=sqlsrv_num_rows($query);

$totalFilter=$totalData;


$sql = "SELECT origin_code,origin_name FROM ganeral_origin  WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (origin_code Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR origin_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //origin_code
    $subdata[]=$row[2]; //origin_name
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
