<?php 
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

include "../config.php";

 error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add favicon -->
	 <link rel="icon" href="../favicon.png" type="image/png">
    <!-- Bootstrap CSS, CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style> 
     .massage{
       padding-left: 50px;
       
     }
  </style>

<title>Create Book</title>

</head>
<body>
 
        <!--form container and form--> 
        <?php
    // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

  	// image file directory
  	$target = "../images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
  		{
        echo "<div class='massage alert alert-primary alert-dismissible fade show' role='alert'>
        <strong> Congratulation!</strong> You successfully post your books.
        <a href='https://bonglib.in/admin/dashboard.php#booktable' class='btn btn-primary'>View Post</a>
         </div>";
                
      }
      else{
             echo "<div class='massage alert alert-warning alert-dismissible fade show' role='alert'>
             <strong> Warning!</strong> Here a problem to books.
             <a href='https://bonglib.in/admin/dashboard.php#booktable' class='btn btn-warning'>Back to Post</a>
             </div>";
             
      }
  }


?>
   

<!-- font awesome, jQuery , Popper.js, Bootstrap JS, ckeditor, JS code -->
<script src="https://kit.fontawesome.com/eaf90380c6.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'editor' );
                </script>

</body>
</html>