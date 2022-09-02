<?php


$con=new mysqli('localhost','root','','customerbill');//it connects to your server. positioning is matters.

if(!$con){
    die(mysqli_error($con));//if server has any problem it will show the error
}
?>