<?php

require_once "../../config.php";

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'organization_type_name',
    2   =>  'organization_type_code',
    3   =>  'isActive',
    4   =>  'start_date',
    5   =>  'end_date',
);

$sql = "SELECT id, organization_type_code, organization_type_name, organization_type_abbr_name, organization_category_id, start_date, end_date, airforce, multiples_day, current_organization, IsActive, created_by, created_date, update_by, update_date
FROM organization_type;
 ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = "SELECT id,organization_type_code, organization_type_name, isActive,start_date,end_date FROM organization_type  WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_type_code Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_type_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = $row[0]; //id
    $subdata[] = $row[1]; //organization_type_code
    $subdata[] = $row[2]; //organization_type_name
    if ($row[3] = 1) {
        $subdata[] = '<i class="la la-toggle-on" style="color:green; font-size:30px; "></i>';
    } else {
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    } //status   
    $subdata[] = $row[4]; //start_date   
    $subdata[] = $row[5]; //end_date   
    $data[] = $subdata;
}
$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

 