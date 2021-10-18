<style>
.container{
    padding:25px;
}
</style>
<?php
define('CONSTANT',true);
require_once ("config.php");
include ("header.php");
include ('nav.php');
?> 
<!-- Container of Search page  -->
<div class="container">
    <!-- Row for Books -->
  <div class="row">

<?php
$key=mysqli_real_escape_string($conn,$_POST['key']);
if(isset($_POST['submit'])){
$S="SELECT * FROM `images` WHERE image_text like'%$key%'";
$result = mysqli_query($conn,$S);
if(mysqli_num_rows($result)>0){
   
    while($row=mysqli_fetch_assoc($result)){
       
        echo "<div class='col-8 col-md-3 col-sm-4 mb-2'><a href='book/$row[id]'><img src='images/$row[image]' width='150px' height='200px'></a></div>";
        
} 
}else {
    echo "<p class='h5 text-center'>No Book found </p> ";
     }
}
?> 

</div>
 <!-- Row for videos -->
 <div class="row">

<?php
$key=mysqli_real_escape_string($conn,$_POST['key']);
if(isset($_POST['submit'])){
$S="SELECT * FROM `video_collection` WHERE description like'%$key%'";
$result = mysqli_query($conn,$S);
if(mysqli_num_rows($result)>0){
   
    while($row=mysqli_fetch_assoc($result)){
       
        echo "<div class='col-8 col-md-3 col-sm-4 mb-2'><a href='video/$row[id]'><img src='images/$row[image]' width='150px' height='200px'></a></div>";
        
} 
}else {
    echo "<p class='h5 text-center'> No Video found </p> ";
     }
}
?> 
</div> 

</div>
<?php
include ('footer.php');
?>
 