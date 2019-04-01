<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
    $originName = $_POST['originName'];
    $originAbbrName = $_POST['originAbbrName'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO ganeral_origin
     (origin_name, origin_abbr_name, IsActive)
     VALUES('$originName', '$originAbbrName', $isActive);
      ";
    // echo $sql;

    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }

    // $originName = "ไทย";

    $sqlInsertSeqNOAndCode = " SELECT id FROM ganeral_origin Where origin_name =  N'$originName'; ";

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNOAndCode);

    
    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
    
    $id = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['id'];
        echo $id;
    }

    $sqlUpdateSeqNoAndCode = " UPDATE ganeral_origin SET seq_no=$id, origin_code='$id' WHERE id=$id; ";

    // echo $sqlUpdateSeqNoAndCode;

    $queryUpdate = sqlsrv_query($conn, $sqlInsertSeqNOAndCode);

    if ($queryUpdate) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
 