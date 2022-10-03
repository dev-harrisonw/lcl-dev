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
    ?>