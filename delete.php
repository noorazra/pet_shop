<?php
include 'config.php';
$userid=$_GET['user'];

$remove="delete from enquire where id='$userid'";
$result=mysqli_query($connection,$remove);

if($result){
    
    echo "<script>alert('data have been removed');window.location.href='view_enquiry.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}


?>