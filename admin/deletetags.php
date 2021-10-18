<?php 
include "../config.php";
$id=mysqli_real_escape_string($conn,$_GET['id']); 
//$id=mysqli_real_escape_string($conn,$rid); 
$query="DELETE FROM `book_details` WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
      echo header("location:https://bonglib.in/admin/dashboard.php");
}
else {
        echo '<script type="text/javascript"> alert("Book Tags not deleted")  </script>';
}
?>