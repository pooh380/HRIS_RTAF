<?php

require_once "../../config.php";

$request = $_REQUEST;
$col = array(
    0   =>  'seq_no',
    1   =>  'organization_category_name',
    2   =>  'organization_category_abbr_name',
    3   =>  'status',
);
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$sql = "SELECT seq_no,organization_category_name,organization_category_abbr_name,status
FROM organization_category";
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
$totalFilter = $totalData;

//Search
// $sql =" SELECT organization_category_name,organization_category_abbr_name FROM organization_category WHERE 1=1 ";
// if (!empty($request['search']['value'])) {
//     $sql.= " AND (organization_category_name Like N'%" .$request['search']['value'] . "%' ";
//     $sql.= " OR organization_category_abbr_name Like N'%" .$request['search']['value'] . "%') ";
//     // $sql.=" AND (prefix_name Like N'%น%' ";
//     // $sql.=" OR prefix_abbr_name Like N'%น%') ";
//     // echo $sql;
//     $query = sqlsrv_query($conn, $sql, $params, $options);
//     $totalData = sqlsrv_num_rows($query);
// }


$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = $row[0]; //seq_no
    $subdata[] = $row[1]; //organization_category_name
    $subdata[] = $row[2]; //organization_category_abbr_name     
    $subdata[] = $row[3]; //status           
    $data[] = $subdata;
}
$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

 