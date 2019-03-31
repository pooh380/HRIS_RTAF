<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'seq_no',
    1   =>  'organization_type_name',
    2   =>  'status',
    3   =>  'start_date',
    4   =>  'end_date',
); 
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql ="SELECT seq_no, organization_type_name, status,  start_date, end_date
FROM organization_type;";





$query=sqlsrv_query($conn,$sql, $params, $options);

$totalData=sqlsrv_num_rows($query);

$totalFilter=$totalData;

if(!empty($request['search']['value'])){
    $sql.=" WHERE organization_type_name LIKE '".$request['search']['value']."%' ";
}

$query=sqlsrv_query($conn,$sql, $params, $options);
$totalData=sqlsrv_num_rows($query);
$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //seq_no
    $subdata[]=$row[1]; //organization_type_name
    $subdata[]=$row[2]; //status
    $subdata[]=$row[3]; //start_date
    $subdata[]=$row[4]; //end_date     
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
