<?php

require_once "../../config.php";
// if($conn){echo "con";}

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'province_code',
    2   =>  'province_name',
    3   =>  'province_abbr_name',
    4   =>  'isActive'
);

//create column like table in database
$sql = "SELECT id,province_code, province_name, province_abbr_name, country_id, IsActive FROM ganeral_province ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;



$sql = "SELECT id,province_code, province_name, province_abbr_name, country_id, IsActive FROM ganeral_province WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (province_code Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR province_abbr_name Like N'%" . $request['search']['value'] . "%'";
    $sql .= " OR province_name Like N'%" . $request['search']['value'] . "%') ";
    
    
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = $row[0];
    $subdata[] = $row[1];
    $subdata[] = $row[2];
    $subdata[] = $row[3];
    $subdata[] = $row[4];
    //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    // $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
    //             <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</button>';
    $data[] = $subdata;
}

// echo '<pre>';
// print_r($data);
// echo '<pre>';

$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);
echo json_encode($json_data);
 