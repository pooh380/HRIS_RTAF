<?php

require_once "../../config.php";

$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";

$sql = " SELECT OrgStrucId, OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
FROM OrgStruc WHERE OrgTypeId = $orgTypeId and OrgStrucActive = 1 ";

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) {
        echo "<option value='" . $result['OrgStrucId'] . "'>" . $result['OrgStrucName'] . " ".$result['OrgStrucId']." ".$result['OrgLevelId']."</option>";
    }
}else{
    echo "<option value=\"\">ไม่มีฐานะหน่วยในโครงสร้าง</option>";
}

?>
