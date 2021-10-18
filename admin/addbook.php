<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:https://bonglib.in/admin/adminlogin');
    }
    include ("../config.php");
    error_reporting(0);
  ?>  
  <!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Add favicon -->
	 <link rel="icon" href="../favicon.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Footer & Form CSS -->
  <style>
 .footer{
     background-color: #1c1918;
     display: flex;
     justify-content: center;
     align-items: center;
     position: relative;
     left: 0;
     bottom: 0;
     width: 100%;
 }
 .footer h6 {
    color: whitesmoke;
    margin: auto;
    width: 60%;
    text-align: center;
    padding: 10px;
 }

    #content{
   	width: 80%;
   	margin: 20px auto;
    
   }
   form{
   	width: 90%;
   	margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    margin-top: 20px;

   }
  
   .submitbutton {
    float: right;
    width: 100%;
    background-color: white;
    border: 1px solid #25383C;
    border-radius: 20px;
    color: #25383C;
}
.submitbutton:hover {
    background-color: #25383C;
    border: 1px solid #25383C;
    color: #ccc;
    
}
  
</style>
   
  <title>Bonglib</title>
  </head>
  <body>
  <!--nav started--> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="https://bonglib.in/"><i class="fas fa-book-reader"></i> Bonglib </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/admin/addbook.php">Add book</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/admin/dashboard.php#booktable">Book Table </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/admin/adminregister.php">Create Admin </a>
        </li>
       </div>
       <div class="navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo $_SESSION['user'] ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://bonglib.in/admin/adminlogout"> <i class="fas fa-sign-out-alt"> Log Out</i></a> 
            
          </div>
        </li>
      </ul>
       </div>
     </div>
  </nav>
  <!--Section Post Form-->
  <section id="postform" class="postform">
  <div class="col-12 col-sm-12 col-md-12 badge bg-primary text-light">
<h2>Add Book </h2> </div>
   <!--form container and form--> 
<div id="content">
   <form method="POST" action="post.php" enctype="multipart/form-data">
   
   
    <input type="hidden" name="size" value="1000000">
   
   <label for="formFileSm" class="form-label"> Upload book cover</label>
  
  	  <input class="form-control form-control-sm" id="formFileSm" type="file" name="image"><br>

      
      <textarea id="editor"  name="image_text" > Write your book.. </textarea> <br><br>
  	
  		<button class="submitbutton" type="submit" name="upload">Submit</button>
  </form>
</div>
  </section> 
  
  
  
  <br> <br> <br> <br>

 <!---Add footer containt -->
 <div class="footer bg-dark col col-sm-12 col-lg-12">
    <p class=" justify-content-center text-light"> Copyright © <?php echo date("Y");?> </p>
 
  
  <!-- font awesome, jQuery , Popper.js, Bootstrap JS, ckeditor, JS code -->
  <script src="https://kit.fontawesome.com/eaf90380c6.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../ckeditor/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'editor' );

                        
                </script>

</body>
</html>