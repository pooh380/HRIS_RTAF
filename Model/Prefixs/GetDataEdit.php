<?php

require_once "../../config.php";

// $_POST["originsId"] = 0;

$PrefixsId = $_POST["PrefixsId"];
$id = "";
$PrefixsN = "";
$PrefixsAbrr = "";
$isActive = "";
// echo $originsId ;

if(isset($originsId)){
    $sql = " SELECT id, perfix_name, perfix_abbr_name, isActive FROM general_perfix where id = $PrefixsId ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $PrefixsN = $row['PrefixsN'];
        $PrefixsAbrr = $row['PrefixsAbrr'];
        $IsActive = $row['IsActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"PrefixsN"=>$PrefixsN,"PrefixsAbrr"=>$PrefixsAbrr,"IsActive"=>$isActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>