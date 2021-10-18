<?php 
 define('CONSTANT',true);
include "../header.php";
 include "../config.php";
 $book_name=mysqli_real_escape_string($conn,$_POST['Book_name']);
 $author= mysqli_real_escape_string($conn,$_POST['Authors']);
 $book_about= mysqli_real_escape_string($conn,$_POST['Book_about']);
$images= mysqli_real_escape_string($conn,$_POST['images']);
$Category= mysqli_real_escape_string($conn,$_POST['Category']);
$Language= mysqli_real_escape_string($conn,$_POST['Language']);
$book_id= mysqli_real_escape_string($conn,$_POST['Book_Id']);
$book_tags= mysqli_real_escape_string($conn,$_POST['Tags']);

$sql= "INSERT INTO `book_details`(`Book_name`, `Authors`, `Book_about`, `images`, `Category`, `Language`, `Book_Id`, `Tags`) 
VALUES ('$book_name','$author','$book_about','$images','$Category','$Language',$book_id,'$book_tags')";
$query=mysqli_query($conn, $sql);
if($query)
{
  echo "<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>Book Tag save successfully</p>
  <hr>
  <a href='https://bonglib.in/admin/dashboard.php#booktag' class='btn btn-success btn-sm'>Book Tag</a>
</div>";
           
}
else{
  echo "<div class='alert alert-warning' role='alert'>
  <h4 class='alert-heading'>Warning!</h4>
  <p>Here some problem to save book tags.</p>
  <hr>
  <a href='https://bonglib.in/admin/dashboard.php#booktag' class='btn btn-success btn-sm'>Book Tag</a>
 </div>";
       
}

include "../footer.php";
mysqli_close($conn);
?>