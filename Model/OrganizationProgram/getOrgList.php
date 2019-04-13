<?php

require_once "../../config.php";

$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";

$sql = " SELECT id,organization_list_name,organization_type_id,IsActive FROM organization_list WHERE organization_type_id = $orgTypeId and IsActive = 1 and id = 49 ; ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) {
        echo "<option value='" . $result['id'] . "'>" . $result['organization_list_name'] . "</option>";
    }
}else{
    echo "<option value=\"\">ไม่มีฐานะหน่วยในโครงสร้าง</option>";
}

?>
