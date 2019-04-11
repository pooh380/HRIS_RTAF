<?php
function getOrgList()
{
    require_once "../../config.php";

    // $orgTypeId = $_POST['orgTypeId'];
    $orgTypeId = 21;
    $sql = " SELECT id,organization_list_name,organization_type_id,IsActive FROM organization_list WHERE organization_type_id = $orgTypeId and IsActive = 1 ; ";
    $result = sqlsrv_query($conn, $sql);
    ?>

    <select name="orgListList" class="select2 form-control">
        <?php
        if (!empty($orgTypeId)) {
            while ($row = sqlsrv_fetch_array($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['organization_list_name'] . "</option>";
            }
        } else {
            ?>
            <option value=""><?php echo $sql; ?></option>
            <option value=""><?php echo $orgTypeId; ?></option>
        <?php
    }
    ?>
    </select>
<?php
}

getOrgList();
?>