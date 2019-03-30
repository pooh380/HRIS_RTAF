<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'organization_part_name',
    2   =>  'is_active',
    3   =>  'created_by',
    4   =>  'created_date',
    5   =>  'modified_by',
    6   =>  'modified_date'
); 
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql ="SELECT id,organization_part_name,is_active, created_by, created_date, modified_by, modified_date
FROM organization_part;";

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
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //organization_part_name
    $subdata[]=$row[2]; //is_active
    $subdata[]=$row[3]; //created_by     
    $subdata[]=$row[4]; //created_date
    $subdata[]=$row[5]; //modified_by     
    $subdata[]=$row[6]; //modified_date        
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
