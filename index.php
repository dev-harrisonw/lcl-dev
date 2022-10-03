<?php
    $serverName = "londoncomedylunch.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "LondonComedyLunch", // update me
        "Uid" => "Inconnection_LCL", // update me
        "PWD" => "Golfer70!" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM LCL";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['TableNo'] . " " . $row['Category'] . " " . $row['Status'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>