<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

$request = $_REQUEST;
$col = array(
    0   =>  'HrtNationId',
    1   =>  'HrtNationNameTh',
    2   =>  'HrtNationActive',
);

//create column like table in database
$sql = "SELECT HrtNationId, HrtNationNameTh, HrtNationActive FROM HrtNation ;";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;

$sql = "SELECT HrtNationId, HrtNationNameTh, HrtNationActive FROM HrtNation  WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (HrtNationNameTh Like N'%" . $request['search']['value'] . "%' ) ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = '
    <a href="../../Views/Nations/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteNation('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[1];
    if($row[2] !== 1){
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    }else{
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    };//status  
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
 