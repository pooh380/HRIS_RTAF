<?php

require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'organization_type_name',
    2   =>  'is_active',
    3   =>  'start_date',
    4   =>  'end_date',
    5   =>  'created_by',
    6   =>  'created_date',
    7   =>  'modified_by',
    8   =>  'modified_date'
); 
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql ="SELECT id,organization_type_name,is_active,start_date,end_date,created_by, created_date, modified_by, modified_date
FROM organization_type;";

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
    $subdata[]=$row[1]; //organization_type_name
    $subdata[]=$row[2]; //is_active
    $subdata[]=$row[3]; //start_date
    $subdata[]=$row[4]; //end_date
    $subdata[]=$row[5]; //created_by
    $subdata[]=$row[6]; //created_date     
    $subdata[]=$row[7]; //modified_by
    $subdata[]=$row[8]; //modified_date          
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
