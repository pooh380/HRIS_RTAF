<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'organization_category_code',
    2   =>  'organization_category_name',
    3   =>  'is_active',
    4   =>  'created_by',
    5   =>  'created_date',
    6   =>  'modified_by',
    7   =>  'modified_date'
); 
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql ="SELECT id,organization_category_code, organization_category_name,is_active, created_by, created_date, modified_by, modified_date
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
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //organization_category_code
    $subdata[]=$row[2]; //organization_category_name
    $subdata[]=$row[3]; //is_active     
    $subdata[]=$row[4]; //created_by
    $subdata[]=$row[5]; //created_date     
    $subdata[]=$row[6]; //modified_by
    $subdata[]=$row[7]; //modified_date          
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
