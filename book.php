<?php 
define('CONSTANT',true);
?>
<style>
.bookcontainer {
     margin-left: 25px;
     margin-right: 25px;
     margin-top: 50px;
     
 }
  p {
     text-align: justify;
     text-justify: inter-word;;
 }
 p:hover{
     color:brown;
     
 }
h1 {
    text-align: center;
}

h2{
    text-align: center;
}
h3{
    text-align: center;
}
</style>

<?php
  include("header.php");
  include("nav.php");
  require_once("config.php");
  ?>
<div class="bookcontainer">

<?php

//$id=mysqli_real_escape_string($conn,$_GET['id']);
$id=mysqli_real_escape_string($conn,$rid);
$query= "SELECT * FROM images WHERE id='$id'";

if($data= mysqli_query($conn,$query)){
    if(mysqli_num_rows($data) > 0){
        echo"<table>";
        echo "<tr>";
        echo "<td>";
      while($row = mysqli_fetch_array($data)){
          echo  $row["image_text"];
          echo"</td>";
          echo"</tr>";
      }
       echo "</table>";
            mysqli_free_result($data);
      } else{
          echo "No records found.";
      }
      } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
      }
      ?>
      </div>
      <?php
      include("footer.php");
      ?>