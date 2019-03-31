<?php

require_once "../../config.php";

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'organization_code',
    2   =>  'organization_name',
    3   =>  'organization_abbr_name',
    4   =>  'status'
);
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql = "SELECT id,organization_code, organization_name, organization_abbr_name, status
FROM organization;";

$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);

$totalFilter = $totalData;


$sql = "SELECT id,organization_code, organization_name, organization_abbr_name, status FROM ganeral_province  WHERE 1=1 ";

// $request['search']['value'] = ส;

if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_code Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_name Like N'%" . $request['search']['value'] . "%') ";
    // $sql.=" AND (organization_part_name Like N'%m%' ";
    // $sql.=" OR organization_part_abbr_name Like N'%m%') ";
    // echo $sql;
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$totalData = sqlsrv_num_rows($query);


$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = $row[0]; //id
    $subdata[] = $row[1]; //organization_code
    $subdata[] = $row[2]; //organization_name
    $subdata[] = $row[3]; //organization_abbr_name     
    $subdata[] = $row[4]; //status      
    $data[] = $subdata;
}
$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

 