<?php

$connInfo = array('Database' => 'HRIS_RTAF', 'UID' => 'sa', 'PWD' => '1020304050', 'ReturnDatesAsStrings' => true);
    $dentrix = sqlsrv_connect('49.77.249.35,1433', $connInfo);

    return $dentrix;
