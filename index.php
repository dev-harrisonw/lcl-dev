
<?php
include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="cricles">
   
<p> Hello World! </p>
    


   <?php 


$sql="select * from `LCL`";
$result=mysqli_query($con,$sql);


if($result){
    while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $TableNo=$row['TableNo'];
        $Status=$row['Status'];
        $Category=$row['Category'];
        echo '
        <div class="circle" data-status='.$Status.'>
        <p class="name">'.$TableNo.'</p>
        <p class="category">'.$Category.'</p>

    </div>
        ';
    }

}
?>

</div>
</body>

<script src="index.js"></script>
</html>