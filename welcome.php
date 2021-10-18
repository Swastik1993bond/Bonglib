<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: https://bonglib.in/login");
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Add favicon -->
      <link rel="icon" href="favicon.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Footer & Form CSS -->
  <style>
 
    #content{
   	width: 80%;
   	margin: 20px auto;
    
   }
  

 #bagview{
    min-height: 80rem;
    width: auto;
    padding: 2rem;
 }
  .bagbadge{
      margin: 1.5rem!important;
      padding: 1rem!important;
  }
</style>
   
  <title>Bonglib</title>
  </head>
  <body>
 
  <!--nav started--> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://bonglib.in/"><i class="fas fa-book-reader"></i> Bonglib </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="https://bonglib.in/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://bonglib.in/floor">Book</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="https://bonglib.in/welcome">Dashboard</a>
        </li></ul>
        <ul class="navbar-nav ml-auto justify-content-end">
        <li class="nav-item nav-item active">
          <a class="nav-item btn btn-light" href="#" role="button" >
          <i class="fas fa-user"></i> <?php  echo $_SESSION['username']?>
          </a>
        </li>
          <li class="nav-item text-decoration-none">
          <a class="nav-link " href="https://bonglib.in/logout"><i class="fas fa-sign-out-alt"></i> LogOut</a>
        </li>
          </ul>
       </div>
    </div>
  </div>
</nav>

  <div class="container mt-4">
    <h3><?php echo "Welcome " . $_SESSION['username'] ?>! </h3>
    <hr>
  <!--include bag and define constant--> 
  
  <section id="bagview" >
      <p class="h4 text-center text-danger bg-light bagbadge">My Bag</p>
   <?php
   define('CONSTANT',true);
  include ("bag.php");
   ?>
</section>
</div> 
<?php 
include ("footer.php");
?>