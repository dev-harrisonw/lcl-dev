
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
   

    


   <?php 


$sql="select * from LCL";
$result=mysqli_query($con,$sql);


if($result){
    while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $ammount=$row['ammount'];
        $status=$row['status'];
        echo '
        <div class="circle" data-status='.$TableNo.'>
        <p class="name">'.$Category.'</p>
        <p class="ammoutn">'.$Status.'</p>

    </div>
        ';
    }

}
?>

</div>
</body>

<script src="index.js"></script>
</html>