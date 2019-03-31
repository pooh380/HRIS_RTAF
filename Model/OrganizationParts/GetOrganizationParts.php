<?php

require_once "../../config.php";
// if($conn){echo "con";}

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'organization_part_code',
    2   =>  'organization_part_name',
    3   =>  'organization_part_abbr_name',
    4   =>  'status'
);

//create column like table in database
$sql = " SELECT id, organization_part_code, organization_part_name, organization_part_abbr_name, isActive FROM organization_part ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$totalData = sqlsrv_num_rows($query);
// echo $totalData;
$totalFilter = $totalData;

//Search
$sql = " SELECT id, organization_part_code, organization_part_name, organization_part_abbr_name, status FROM organization_part WHERE 1=1 ";
// $request['search']['value'] = ส;

if (!empty($request['search']['value'])) {
    $sql .= " AND (organization_part_name Like N'%" . $request['search']['value'] . "%' ";
    $sql .= " OR organization_part_abbr_name Like N'%" . $request['search']['value'] . "%') ";
    // $sql.=" AND (organization_part_name Like N'%m%' ";
    // $sql.=" OR organization_part_abbr_name Like N'%m%') ";
    // echo $sql;
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

// $sql.= " WHERE prefix_name LIKE '".$request['search']['value']."%' ";

// echo $sql;

//Order
// $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  DESC ".
//     $request['start']."  ,".$request['length']."  ";
// $query=sqlsrv_query($conn,$sql,$params,$options);
// echo "<br>".$sql."<br>";
// if($query){echo "order by";}else{echo "cannnot";}

$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = $row[0];
    $subdata[] = $row[1];
    $subdata[] = $row[2];
    $subdata[] = $row[3];
    $subdata[] = $row[4];           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
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
 