<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'seq_no',
    1   =>  'organization_category_name',
    2   =>  'status',
    3   =>  'created_by',
    4   =>  'created_date',
    5   =>  'update_by',
    6   =>  'update_date'
); 
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql ="SELECT seq_no,organization_category_name,status, created_by, created_date, update_by, update_date
FROM organization_category;";

$query=sqlsrv_query($conn,$sql, $params, $options);

$totalData=sqlsrv_num_rows($query);

$totalFilter=$totalData;

if(!empty($request['search']['value'])){
    $sql.=" WHERE organization_category_name LIKE '".$request['search']['value']."%' ";
}

$query=sqlsrv_query($conn,$sql, $params, $options);

$totalData=sqlsrv_num_rows($query);


$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //seq_no
    $subdata[]=$row[1]; //organization_category_name
    $subdata[]=$row[2]; //status     
    $subdata[]=$row[3]; //created_by
    $subdata[]=$row[4]; //created_date     
    $subdata[]=$row[5]; //update_by
    $subdata[]=$row[6]; //update_date          
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
