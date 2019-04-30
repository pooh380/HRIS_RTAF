<?php

require_once '../../config.php';

// if($conn){echo "conn";}

$orgId = "";
$orgLevelId = "";
$orgStrucMain = "";

$sql = " SELECT OrgStrucId, OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgSubUnitId, OrgStrucMain, OrgStrucName
FROM OrgStruc; ";
$query = sqlsrv_query($conn,$sql);

if($query){echo $sql;}


$data=array();
while($row=sqlsrv_fetch_array($query)){
    $subdata=array();
    $subdata['OrgStrucId'] = $row[0]; 
    $subdata['ฐานะหน่วย'] = $row[1]; 
    $subdata['OrgPartId']= $row[2]; 
    $subdata['OrgGroupTypeId']= $row[3]; 
    $subdata['OrgTypeId']= $row[4]; 
    $subdata['OrgSubUnitId']= $row[5]; 
    $subdata['แม่']= $row[6]; 
    $subdata['OrgStrucName']= $row[7]; 
    $data[]=$subdata;
}

echo "<pre>";
print_r($data);
echo "<pre>";

// update

$sql1 = " UPDATE OrgStruc SET OrgLevelId=3, OrgStrucMain=8 WHERE OrgStrucId = 4 ; ";
// $sql = " UPDATE HRIS_NEW.dbo.OrgStruc SET OrgLevelId=$orgLevelId, OrgStrucMain=$orgStrucMain WHERE OrgStrucId = $orgId ; ";
$query = sqlsrv_query($conn,$sql1);

if($query){echo $sql1;}
?> 