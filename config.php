
<?php

// $serverName = "45.77.249.35"; //serverName\instanceName ถ้าฐานข้อมูลอยู่ในเครื่องเราใช้ localhost 
// $serverName = "45.77.249.35"; //serverName\instanceName ถ้าฐานข้อมูลอยู่ในเครื่องเราใช้ localhost 
// $connectionInfo = array(
// "Database" => "HRIS",
// "UID" => "sa",
// "PWD" => "1020304050",
// "MultipleActiveResultSets"=>true,
// "CharacterSet"  => 'UTF-8'

$serverName = "10.243.0.9\MSSQLSERVER01";
$connectionInfo = array(
    "Database" => "HRIS",
    "UID" => "sa",
    "PWD" => "2123121254",
    "MultipleActiveResultSets" => true,
    "CharacterSet"  => 'UTF-8'
);

$conn = sqlsrv_connect($serverName, $connectionInfo,);

if ($conn) {
    // echo "Connection established.<br />";
} else {
    echo "Connection could not be established"."<br />";
    // die(print_r(sqlsrv_errors(), tdrue));
    echo "<pre>";
    echo $serverName." ";
    echo "<pre>";
    print_r($connectionInfo);
    echo "<pre>";
}
?>