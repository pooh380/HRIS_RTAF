<?php

require_once "../../config.php";

// $name = $_GET['q'];


$sql = "SELECT id, organization_type_name FROM organization_type where organization_type_name  LIKE N'%" . $_GET['q'] . "%' ";

$result = sqlsrv_query($conn, $sql);



while ($row = sqlsrv_fetch_array($result)) {

    $data[] =  array(
        "id" => $row["id"],
        "value" => $row["organization_type_name"]
    );
}

$json = array(
    "total" => "",
    "items" => $data
);


echo json_encode($json);

mysqli_close($conn);
