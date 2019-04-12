<?php

require_once "../../config.php";


$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
// $orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";
$orgId = isset($_POST['orgId']) ? $_POST['orgId'] : "";


// $orgTypeId = 21;
// $orgListId = 49;

// $sql = " SELECT  organization_level.id, organization_level.organization_level_name FROM organization_list INNER JOIN organization_level ON organization_list.organization_level_id = organization_level.id INNER JOIN organization_type ON organization_list.organization_type_id = organization_type.id  WHERE organization_type_id ='$orgTypeId' AND organization_list.id = '$orgListId'; ";
$sql = " SELECT TOP(10) organization_type_id,organization_list.id,organization_list_name,organization_id, organization_level_id
FROM organization_list
WHERE organization_list.organization_type_id = $orgTypeId AND organization_list.organization_id like '%00$orgId' 
ORDER BY organization_level_id ASC ;";

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) { ?>

        <a style="margin-left: 15px; ">
            <li class="list-group-item" onclick="showDetail(<?php echo $result['id'] ;?>)">
                <s class="vl"></s> <input type="checkbox" value="01">
                <!-- <span style="font-weight: bold;font-size: 12px;" ><?php echo $result['organization_level_name'] ;?></span> -->
                <span style="font-weight: bold;font-size: 12px;" ><?php echo $result['organization_list_name'] ; echo $result['organization_level_id'] ;?></span>
            </li>
        </a>


    <?php }
} else {
    echo "ไม่มีฐานะหน่วยในโครงสร้าง";
}

?>