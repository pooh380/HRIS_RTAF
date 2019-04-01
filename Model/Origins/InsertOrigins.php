<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {
<<<<<<< HEAD
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
=======
    $originsName = $_POST['originsName'];
    $originsAbbrName = $_POST['originsAbbrName'];
    $isActive = $_POST['isActive'];

    $sql = "INSERT INTO ganeral_origin
     (id, seq_no, origin_code, origin_name, origin_abbr_name, IsActive, created_by, cerated_date, update_by, update_date)
     VALUES(0, 0, '5', '$originsName', '$originsAbbrName', $isActive, '', '', '', ''); ";
    echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";
        ob_start();
        header("Location:hris/views/origins/index.php");
        ob_end_flush();

>>>>>>> 5dab3bacaff59b0ebecd6d47cef025ecae05d121
    } else {
        echo "บันทึกไม่ได้";
    }
}
 