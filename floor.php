<style>
.newscontainer{
  margin: auto;
  width: 70%;
  padding: 10px;
}
.search{
   padding: 20px;
  
}
.mt-100{
  margin-top:50px;
  margin-bottom: 50px;
  }
  .mt-30{
    margin-top:30px;
    }
  .mb-30{
    margin-bottom:30px;
    }
    
</style>
<?php 
include ("config.php");
define('CONSTANT',true);
include ("header.php");
include ("nav.php");
?>
<!--Search input-->
<div class="input-group mb-3">
<div class="container-fluid search">
    <form class="d-flex" method="post" action="search">

  <input type="text" class="form-control" placeholder="Search" name="key" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <button type="submit" name="submit" class="btn btn-danger mx-1" > Test </button>
  </form>
</div> 
</div>

 <!-- Book container -->
<div class="newscontainer">
<div class="row">
<?php
error_reporting(0);
$id=mysqli_real_escape_string($conn,$rid);
$per_page=8;
$q="SELECT * FROM `images`";
$s=mysqli_query($conn,$q);
$record=mysqli_num_rows($s);
$pagi=ceil($record/$per_page);
  $id--;
  $start=$id*$per_page;


$sql="SELECT * FROM `images` ORDER BY id DESC LIMIT $start,$per_page "; 
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);

if ($total!= 0)
{
  while($result=mysqli_fetch_assoc($data))
 
  {
?>
  

  <div class="col-10 col-md-3 col-sm-4  mb-3"> 
  <a href="https://bonglib.in/aboutbook/<?php echo $result['id'];?>" ><img class="card-img-top"  height="250px" src="..\images\<?php echo $result['image'];?>" alt=""></a>
  
  <div class="card-body">
  <a href="https://bonglib.in/book/<?php echo $result['id'];?>" class="btn btn-danger btn-sm" title="Read the book"><i class="fas fa-book-open"></i></a>

 
 
  <a href="https://bonglib.in/aboutbook/<?php echo $result['id'];?>" class="btn btn-danger btn-sm" title="About the book"><i class="fas fa-info-circle"></i> </a>
</div>
<div class="card-footer text-muted">
 <div class="btn-group">
  <a href="https://www.facebook.com/sharer.php?u=https://bonglib.in/book/<?php echo $result['id'];?>" class="btn btn-light btn-sm "><i class="fab fa-facebook"></i> </a>
  <a href="https://twitter.com/share?url=https://bonglib.in/book/<?php echo $result['id'];?>&text=Check this new book &via=[via]&hashtags=bonglib" class="btn btn-light  btn-sm"><i class="fab fa-twitter"></i> </a>
  <a href="https://www.linkedin.com/shareArticle?url=https://bonglib.in/book/<?php echo $result['id'];?>&title=Check this new book" class="btn btn-light  btn-sm"><i class="fab fa-linkedin"></i> </a>
  <a href="https://api.whatsapp.com/send?text=Check this new book... https://bonglib.in/book/<?php echo $result['id'];?>" class="btn btn-light  btn-sm"><i class="fab fa-whatsapp"></i> </a>
 </div>
 </div>
 </div>
  
 <br>
 <?php
  }
}

?>
</div>
 </div>
 <div class="container mt-100">
 <ul class="pagination pagination-sm justify-content-center mt-30">
	<?php 
	for($i=1;$i<=$pagi;$i++){
	
	?>
		<li class="page-item"><a class="page-link" href="http://localhost/bonglib/floor/<?php echo $i?>"><?php echo $i?></a></li>
	<?php
	}
	?>
    
	<?php // } ?>
  </ul></div>
 <?php 
 include ("footer.php");
 ?>