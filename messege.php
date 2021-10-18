<?php
include("config.php");
error_reporting(0);
if(isset($_POST['submit']))
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$about=mysqli_real_escape_string($conn,$_POST['about']);
$comments=mysqli_real_escape_string($conn,$_POST['query']);

$sql="INSERT INTO `massege` (`name`, `email`, `about`, `comments`) VALUES ('$name', '$email', '$about', '$comments')";
$data=mysqli_query($conn,$sql) or die("Can not insert data into database");
if($data)
{
  echo "";
           header("Location:https://bonglib.in/");
}
else{
       echo "";
           header("Location:https://bonglib.in/");
}


?>