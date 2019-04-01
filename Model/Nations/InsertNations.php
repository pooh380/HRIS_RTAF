<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $NationFN = $_POST['NationFN'];
    $isActive = $_POST['isActive'];

     $sql = " INSERT INTO general_nation
     (id, seq_no, nation_code, nation_name, IsActive)
     VALUES(3, 9, '3', '$NationFN', $isActive);";
     
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>