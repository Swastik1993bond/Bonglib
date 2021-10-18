<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Add favicon -->
      <link rel="icon" href="favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
 <title>Bonglib.in</title>
  </head>
  <body>


<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  echo "<div class='alert alert-primary' role='alert'>
  <h4 class='alert-heading'>Log in needed!</h4>
  <p>You need to Log in for put this book on your bag.Please make sure you are logged in. </p>
  <hr>
  <p class='mb-0'>For log in click here. <a class='btn btn-primary btn-sm' href='https://bonglib.in/login'>Log in</a> </p>
</div>";
die();
}


require_once "config.php";

$user=$_SESSION['username'];

$image=mysqli_real_escape_string($conn,$_POST['image']);
$id=mysqli_real_escape_string($conn,$_POST['link_id']);


         $sql="INSERT INTO `bag` (`User`, `image`, `link_id`) VALUES ('$user', '$image', '$id')";
         $d=mysqli_query($conn,$sql) or die("Can not insert data into database");
if($d)
{
  echo "<div class='col-10 col-sm-10 col-md-10 col-lg-10'><br><div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>You successfully put the book in your bag. Now go to ?</p>
  <hr>
  <a href='https://bonglib.in/welcome' class='btn btn-success btn-sm'>My Bag</a>
  <a href='https://bonglib.in/floor' class='btn btn-success btn-sm'>Book</a>
</div> </div>";
           
}
else{
  echo "<div class='col-10 col-sm-10 col-md-10 col-lg-10'><br><div class='alert alert-warning' role='alert'>
  <h4 class='alert-heading'>Warning!</h4>
  <p>Here some problem.Fail to put the book on your bag. Now go to ?</p>
  <hr>
  <a href='https://bonglib.in/welcome' class='btn btn-success btn-sm'>My Bag</a>
  <a href='https://bonglib.in/' class='btn btn-success btn-sm'>Home</a>
</div></div>";
       
}


      
           
      ?>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
      </body> </html> 