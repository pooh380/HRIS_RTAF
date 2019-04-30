<?php

require_once '../../config.php';

// if($conn){echo "conn";}

$orgId = "";
$orgLevelId = "";
$orgStrucMain = "";
$OrgPartId = "";
$OrgGroupTypeId = "";
$OrgTypeId = "";
$OrgSubUnitId = "";
$OrgStrucMain = "";
$OrgStrucSubMain = "";
$OrgStrucPath = "";
$OrgStrucName = "";
$OrgStrucActive = "";



// insert

$sql = "INSERT INTO OrgStruc
(OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgSubUnitId, OrgStrucMain, OrgStrucPath, OrgStrucName, OrgStrucActive)
VALUES(6, 1, 2, 3, 2, 9,'', 'หมวด CIA', 1); ";


// $sql = " INSERT INTO OrgStruc
// (OrgLevelId, OrgStrucMain, OrgStrucName, OrgStrucActive)
// VALUES(4, 3, 'แผนก CIA', 1); ";
// $sql = " UPDATE HRIS_NEW.dbo.OrgStruc SET OrgLevelId=$orgLevelId, OrgStrucMain=$orgStrucMain WHERE OrgStrucId = $orgId ; ";
$query = sqlsrv_query($conn,$sql);

if($query){echo $sql;echo "insert";}
?> 