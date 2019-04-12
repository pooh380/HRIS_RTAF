<?php

error_reporting(0);

require_once "../../config.php";



// $orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
// $orgListId = isset($_POST['orgLevelId']) ? $_POST['orgLevelId'] : "";
// $orgId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";
// $personTypeId = isset($_POST['personTypeId']) ? $_POST['personTypeId'] : "";



$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'organization_position_semi_abbr_name',
    2   =>  'is_Active'
);

// $orgTypeId = 21;
// $orgListId = 87;
// $orgId = 4;
// $personTypeId = 1;

// echo $orgTypeId . $orglId . $orgListId . $personTypeId;

$orgTypeId = $_POST['orgTypeId'];
$orgListId = $_POST['orgListId'];
$orgId = $_POST['orgId'];
$personTypeId = $_POST['personTypeId'];


// echo $orgTypeId . $orglId . $orgListId . $personTypeId;

$sql =" SELECT TOP(5) id , organization_position_semi_abbr_name,is_Active FROM organization_position where  organization_type_id = $orgTypeId AND organization_id = $orgId AND organization_list_id = $orgListId AND person_type_id = $personTypeId ;";
// echo $sql;

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;




$sql = " SELECT TOP(5) id , organization_position_semi_abbr_name,is_Active FROM organization_position where  organization_type_id = $orgTypeId AND organization_id = $orgId AND organization_list_id = $orgListId AND person_type_id = $personTypeId  ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_position_semi_abbr_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_position_semi_abbr_name Like N'%" . $request['search']['value'] . "%') ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

$data=array();

while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata[] = '
    <a href=""><i class="la la-file-text"></i></a>
    <a href="./money.php?personId="'.$row[0].'" style="color:#0f1733;"><i class="la a la-money"></i></a>
    <a class="dropdown">
        <a data-toggle="dropdown">
            <i class="la la-ellipsis-v"></i></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><i class="la la-edit"></i> แก้ไข</a>
            <a class="dropdown-item" href="#"><i class="la la-trash-o"></i>ลบ</a>
        </div>
    </a>
    ';//id
    $subdata[] = $row[0]; //id
    // $subdata[] = $row[1]; //id
    $subdata[] = $row[1]; //origin_code
    if($row[2] !== 1){
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

?>
