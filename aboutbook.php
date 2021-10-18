<style> 
html,body {
    overflow-x: hidden; /* Hide scrollbars */
}
.page_container{
    padding-top: 3rem;
    padding-left: 3rem;
    padding-bottom: 3rem;
    
}
.text-justify{
    text-align: justify;
  text-justify: inter-word;
}
.row{
    margin-top: 2rem !important;
}
</style>
<?php 

include "config.php";
define('CONSTANT',true);
include "header.php";
include "nav.php";
?> <?php
$id=mysqli_real_escape_string($conn,$rid);
$sql= "SELECT * FROM `book_details` WHERE Book_Id='$id'";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);

if ($total != 0)
{
  while($result=mysqli_fetch_assoc($data))
 
  {
?>
<!-- Page container start -->
<div class="page_container ">
<div class="container d-flex justify-content-end">
<div class="btn-group ">
  <a href="https://www.facebook.com/sharer.php?u=https://bonglib.in/book.php?id=<?php echo $result['Book_Id'];?>" class="btn btn-link link-secondary"><i class="fab fa-facebook"></i> </a>
  <a href="https://twitter.com/share?url=https://bonglib.in/book.php?id=<?php echo $result['Book_Id'];?>&text=Check this new book &via=[via]&hashtags=bonglib" class="btn btn-link link-secondary"><i class="fab fa-twitter"></i> </a>
  <a href="https://www.linkedin.com/shareArticle?url=https://bonglib.in/book.php?id=<?php echo $result['Book_Id'];?>&title=Check this new book" class="btn btn-link link-secondary"><i class="fab fa-linkedin"></i> </a>
  <a href="https://api.whatsapp.com/send?text=Check this new book... https://bonglib.in/book.php?id=<?php echo $result['Book_Id'];?>" class="btn btn-link link-secondary"><i class="fab fa-whatsapp"></i> </a>
 </div>  </div>

<div class="row ">
<div class="col-10 col-md-6 col-sm-8">
<p class="h1 text-center "> <?php echo $result['Book_name']?> </p>
<p class="h3 text-center"> <?php echo $result['Authors'] ?></p>
<p class="text-muted text-start"> Genre: <?php echo $result['Category']  ?> </p>
<p class="text-muted text-start">Language: <?php echo $result['Language']  ?> </p>

<p class=" text-justify" > <?php echo $result['Book_about'] ?></p>

<div class="card-body ">
  <a href="https://bonglib.in/book/<?php echo $result['Book_Id'];?>" class="btn btn-danger btn-sm "><i class="fas fa-book-open"></i> Read</a>
  
  </div></div>
<div class="col-10 col-md-4 col-sm-8">

<img src="images/<?php echo $result['images']  ?>" width="200" height="250" class="img-fluid rounded mx-auto d-block" >
</div>
<?php 
  }
}
?>

</div>
</div>

<?php 
include "footer.php";
?>