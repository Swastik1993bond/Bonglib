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
  <input type="submit" name="submit" class="btn btn-danger mx-1" value="Search">
  </form>
</div> 
</div>

 <!-- Book container -->
<div class="newscontainer">
<div class="row">
<?php
error_reporting(0);
$per_page=8;
$start=0;
$current_page=1;
if(isset($_GET['start'])){
	$start=$_GET['start'];
	if($start<=0){
		$start=0;
		$current_page=1;
	}else{
		$current_page=$start;
		$start--;
		$start=$start*$per_page;
	}
}
$record=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `video_collection`"));
$pagi=ceil($record/$per_page);
$sql="SELECT * FROM `video_collection` ORDER BY id DESC LIMIT $start,$per_page "; 
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);

if ($total != 0)
{
  while($result=mysqli_fetch_assoc($data))
 
  {
?>
  
  <div class="col-10 col-md-3 col-sm-4  mb-3"> 
  <img class="card-img-top"  height="250px" src="images\<?php echo $result['image'];?>" alt="">
  
  <div class="card-body">
  <a href="audio/<?php echo $result['id'];?>" class="btn btn-danger btn-sm" title="Veiw details of the Video"><i class="fas fa-play"></i></a>
  <!-- <a href="keep.php?id= <?php // echo $result['id'];?>" class="btn btn-danger btn-sm" title="Add to bag"><i class="fas fa-briefcase"></i> </a> --> 
  <!-- <a href="aboutbook.php?id=<?php // echo $result['id'];?>" class="btn btn-danger btn-sm" title="About the book"><i class="fas fa-info-circle"></i> </a> 
</div> -->
<div class="card-footer text-muted">
<div class="btn-group">
  <a href="https://www.facebook.com/sharer.php?u=https://bonglib.in/video/<?php echo $result['id'];?>" class="btn btn-light btn-sm "><i class="fab fa-facebook"></i> </a>
  <a href="https://twitter.com/share?url=https://bonglib.in/video<?php echo $result['id'];?>&text=Check this new book &via=[via]&hashtags=bonglib" class="btn btn-light  btn-sm"><i class="fab fa-twitter"></i> </a>
  <a href="https://www.linkedin.com/shareArticle?url=https://bonglib.in/video<?php echo $result['id'];?>&title=Check this new book" class="btn btn-light  btn-sm"><i class="fab fa-linkedin"></i> </a>
  <a href="https://api.whatsapp.com/send?text=Check this new book... https://bonglib.in/video<?php echo $result['id'];?>" class="btn btn-light  btn-sm"><i class="fab fa-whatsapp"></i> </a>
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
	$class='';
	if($current_page==$i){
		?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li><?php
	}else{
	?>
		<li class="page-item"><a class="page-link" href="?start=<?php echo $i?>"><?php echo $i?></a></li>
	<?php
	}
	?>
    
	<?php } ?>
  </ul></div>
 <?php 
 include ("footer.php");
 ?>