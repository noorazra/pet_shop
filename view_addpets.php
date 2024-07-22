<?php

require_once('config.php');
$petname=$_POST['petname'];
$price=$_POST['price'];
$category=$_POST['category'];
$description=$_POST['description'];

$register="insert into pets(petname,price,category,description)values('$petname','$price','$category','$description')";

$result=mysqli_query($connection,$register);

if($result){
    
    echo "<script>alert('Added Successfully');window.location.href='add_pets.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}
?>