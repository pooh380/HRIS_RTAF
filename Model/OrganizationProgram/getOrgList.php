<?php

require_once "../../config.php";

$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";

$sql = " SELECT id,organization_list_name,organization_type_id,IsActive FROM organization_list WHERE organization_type_id = $orgTypeId and IsActive = 1 and id <= 5 ; ";
$result = sqlsrv_query($conn, $sql);
$rows = sqlsrv_num_rows($result);

if ($rows > 0) {
    ?>
    <option value=""><?php echo $sql; ?></option>
    <option value=""><?php echo $orgTypeId; ?></option>
    <?php
} else {
    while ($row = sqlsrv_fetch_array($result)) {
        echo "<option value='" . $row['id'] . "'>" . $row['organization_list_name'] . "</option>";
    }
}
?>