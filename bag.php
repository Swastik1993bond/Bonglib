<?php 
if(!defined('CONSTANT')){
  die();
} 
?>
<div class="newscontainer">
 <div class="row">
 <?php
include "config.php";
$user=$_SESSION['username'];

$q="SELECT * FROM `bag` WHERE User='$user'";
$d=mysqli_query($conn,$q);
$t=mysqli_num_rows($d);

if ($t != 0)
{
  while($r=mysqli_fetch_assoc($d))
 
  {
?>
  
  <div class="col-8 col-md-3 col-sm-4  mb-2"> 
  <img class="img-fluid "  height="200px" width="125px" src="images\<?php echo $r['image'];?>" alt="">
  
  <div class="card-body">
  <!--btn-group-->
  <a href="https://bonglib.in/book/<?php echo $r['link_id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-book-open" title="Read"></i> </a>
  <a href="https://bonglib.in/bagremove/<?php echo $r['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash" title="Remove"></i> </a>
  </div>
 </div>
<br><br>
 <?php
  }
}

?>

</div>
 </div>