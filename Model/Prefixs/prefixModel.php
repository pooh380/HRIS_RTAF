<?php
require_once "../../config.php";

$sql = "SELECT prefix_name FROM prefix";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['prefix_name'];
      echo "<br>";
}
?>