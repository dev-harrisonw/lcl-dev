<?php


$con=new mysqli('tcp:londoncomedylunch.database.windows.net,1433','Inconnection_LCL','Golfer70!','LCL');//it connects to your server. positioning is matters.

if(!$con){
    die(mysqli_error($con));//if server has any problem it will show the error
}
?>