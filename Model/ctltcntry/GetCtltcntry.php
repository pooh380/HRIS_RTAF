<?php
error_reporting(0);
require_once "../../config.php";

$request=$_REQUEST;
$col =array(
    0   =>  'CountryId',
    1   =>  'CountryNameTh',
    2   =>  'CountryNameEn',
    3   =>  'CountryActive',
); 

$sql =" SELECT CountryId, CountryNameTh, CountryNameEn,CountryActive FROM HrtCountry ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = " SELECT CountryId, CountryNameTh, CountryNameEn,CountryActive FROM HrtCountry WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (CountryNameTh Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR CountryNameEn Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}
$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[] = '
    <a href="../../Views/ctltcntry/edit.php?id='.$row[0].'"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="'.$row[0].'"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deletectltcntry('.$row[0].')" id="'.$row[0].'"></i></a>
    ';//id
    $subdata[] = $row[1]; //CntryCode
    $subdata[]= $row[2]; //CntryName
    if($row[3] !== 1){
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    }else{
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    }//status   
    $data[]=$subdata;
}
$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);
// echo "<pre>";
// print_r($data);
// echo "<pre>";

echo json_encode($json_data);

sqlsrv_close($conn);
