<?php 
        include "config.php";

        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $Country=mysqli_real_escape_string($conn,$_POST['Country']);
        $State=mysqli_real_escape_string($conn,$_POST['State']);
        $City=mysqli_real_escape_string($conn,$_POST['City']);
        $DoB=mysqli_real_escape_string($conn,$_POST['DoB']);

        if(isset($_POST['submit'])) {
      

      $update= "UPDATE `users` SET `name`=$name,`email`=$email,`Country`=$Country,`State`=$State,`City`=$City,`DoB`= $DoB,`gender`=$gender WHERE username='$user'";
      $query=mysqli_query($conn, $update);
      if($query){
       echo "done";
        } else{ 
            
          echo "fail";
        }
    }
    ?>
 