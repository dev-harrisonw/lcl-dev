<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:londoncomedylunch.database.windows.net,1433; Database = LondonComedyLunch", "Inconnection_LCL", "Golfer70!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Inconnection_LCL", "pwd" => "Golfer70!", "Database" => "LondonComedyLunch", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:londoncomedylunch.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>