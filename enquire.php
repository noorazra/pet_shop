<?php

require_once('config.php');
$name=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$petcategory=$_POST['petcategory'];
$message=$_POST['message'];

$register="insert into enquire(name,phone,email,petcategory,message)values('$name','$phone','$email','$petcategory','$message')";

$result=mysqli_query($connection,$register);

if($result){
    
    echo "<script>alert('Thank you for Registering');window.location.href='pcontact.html';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}
?>