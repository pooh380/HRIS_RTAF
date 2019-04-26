<h1>hello</h1>

<?php
require_once "./config.php";

$sql = " select * FROM OrgStruc WHERE OrgStrucId = 6; ";
$query = sqlsrv_query($conn, $sql);


echo $sql;

while ($row = sqlsrv_fetch_array($query)) {
  
  $a = $row['OrgStrucPath'];
  $c = $row['OrgStrucName'];
  echo "<Br>";

}
echo "<Br>";
echo "orgPath: ".$a;
echo " OrgStrucName: ".$c;
echo "<Br>";

// original string 
$str = $a; 
   
// declaring delimiters 
$del = "/"; 
  
//calling strtok() function 
$token = strtok($str, $del); 
  
// while loop to get all tokens 
$resultArray = array();
while ($token !== false) 
{ 
    echo "$token \n"; 
    $b = $token;
    $token = strtok($del);
    array_push($resultArray,$b); 
    
}   

echo "<pre>";
print_r($resultArray);
echo "<pre>";


$sql1 = " SELECT OrgStrucId, OrgStruc.OrgLevelId, OrgLevelName, OrgStruc.OrgSubUnitId, OrgPartName, OrgGroupTypeName, OrgTypeName, OrgSubUnitName, OrgSubUnitName, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
FROM OrgStruc JOIN OrgLevel ON OrgStruc.OrgLevelId = OrgLevel.OrgLevelId
JOIN OrgPart ON OrgStruc.OrgPartId = OrgPart.OrgPartId
JOIN OrgGroupType ON OrgStruc.OrgGroupTypeId = OrgGroupType.OrgGroupTypeId
JOIN OrgType ON OrgStruc.OrgTypeId = OrgType.OrgTypeId
JOIN OrgSubUnit ON OrgStruc.OrgSubUnitId = OrgSubUnit.OrgSubUnitId
WHERE OrgStrucId = 6 AND OrgStruc.OrgLevelId = 5 OR OrgSubUnit.OrgSubUnitId IN (".implode(',',$resultArray).");";

echo "<Br>";

echo $sql1;

$query1 = sqlsrv_query($conn, $sql1);

$array = array();

while ($row = sqlsrv_fetch_array($query1)) {
  // $a = $row['OrgSubUnitName']." ".$row['OrgLevelName'];
  $a = $row['OrgSubUnitName'];
  array_push($array,$a);
}


krsort($array);
echo "<pre>";
print_r($array);
echo "<pre>";



  foreach($array as $k=>$value) { 
       echo $value." " ;  // $k is the key 
  }
sqlsrv_close($conn);
