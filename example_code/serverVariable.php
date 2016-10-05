<?php
    $user = 'sunlikeReader'; // same account for production and test server
    $password = 'sunlikeReader'; // same account for production and test server
    // 'sunv9' for production server
    $host = 'sunv9';
    //$dsn = 'odbc:DRIVER=FreeTDS;SERVERNAME='.$host.';dbname=UPGI_OverdueMonitor;charset=UTF-8';   //linux production server
    $dsn = 'odbc:DRIVER={ODBC Driver 13 for SQL Server};Server=localhost;Database=UPGI_OverdueMonitor;';     //windows local testing env.
    $option = array('PDO::ATTR_ERRMODE' => 'PDO::ERRMODE_EXCEPTION', 'PDO::ATTR_DEFAULT_FETCH_MODE' => 'PDO::FETCH_ASSOC', 'PDO::ATTR_EMULATE_PREPARES' => 'false');
?>