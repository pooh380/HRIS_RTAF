<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$nationID = $_POST["nationID"];
$id = "";
$nationName = "";
$nationCode = "";
$IsActive = "";
// echo $originsId ;

if(isset($nationID)){
    $sql = " SELECT id, nation_code, nation_name, IsActive FROM general_nation where id = $nationID  ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $nationCode = $row['nation_code'];
        $nationName = $row['nation_name'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"nationCode"=>$nationCode,"nationName"=>$nationName,"IsActive"=>$IsActive);
    print(json_encode($r));
}
?>