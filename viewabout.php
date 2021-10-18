<?php
if(!defined('CONSTANT')){
  die();
} 

?> 
<style>
.container{
    background-color: #F3F6FB;
    width: auto;
    height: auto;
    padding-top: 20px;
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 20px;
    
}

.h3{
  border-bottom-style: solid;
   border-bottom-color: #4C5052;
}
 .detail_list {
   padding-bottom: 3px;
   list-style-type: none;
   margin-left: 3px;
   font-weight: bold;
}
.social_list {
  display:flex;
  padding-right:15px;
  padding-left: 10px;
 
}
.social_list a {
  padding-right:10px;
  padding-left: 10px;
  font-size: 30px;
  color: #04802D;
}
.social_list a:hover {
  padding-right:10px;
  padding-left: 10px;
  font-size: 35px;
  color: #045920;
}
.query{
  width:100%;
  height: 80px;
  }

 
</style>
<section id="about">
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 col-sm-12">
    <p class="h3 justify-content-center">About </p>
    <p class="text-secondary text-wrap">Bonglib is an ebook library platform. We share ebooks and audio books for learning and entertaining. 
Knowledge is the power to change the world. We can change society by spreading knowledge. Our goal is to lighten the darkness by spreading the light of knowledge.
Bonglib was created by Abhisek Karmakar. Bonglib works in India, Bangladesh and Nepal from West Bengal, India. </p>
    </div>
    <div class="col-12 col-md-6 col-sm-12">
    <img src="images/jess-bailey-designs-1018136.jpg" class="img-fluid" width="450px" height="300px">
    </div>
  </div>
</div></section>
<br>
<section id="contact">

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 col-sm-12">
     <!--Contact Form --> 
     <p class="h3 justify-content-center">Send Message Us </p><br>
      <form method="POST" action="messege.php" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control" required>
     </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About your query</label>
    <input type="text" name="about" class="form-control" required>
  </div>
  <div class="mb-3">
  <label for="inputlg" class="form-label">Query or Comments</label>
  <input type="text" name="query" class="form-control input-lg query" id="inputlg" required>
 </div>
  <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
</form>

    </div>
    <div class="col-12 col-md-6 col-sm-12">
    <p class="h3 justify-content-center">Get in Touch </p><br>
    <p class="text-secondary text-wrap">Want to knew more about us ? 
      Want to add your book? Contact with us. Join us on our socialsites for stay update.</p>
    <ul class="detail_list">
     <li><i class="fas fa-map-marker-alt"></i> Kalyani, West Bengal, India</li>
     <li><a href="mailto:bonglib.desk@gmail.com" class="text-decoration-none text-dark"><i class="far fa-envelope"></i> bonglib.desk@gmail.com </a></li>
    </ul>
    <!--Add social button--> 
    <div class="social_list">
  <a href=" "><i class="fab fa-facebook"></i> </a>
  <a href=" "><i class="fab fa-twitter"></i> </a>
  <a href=" "><i class="fab fa-linkedin"></i> </a>
  <a href="https://t.me/bonglib" ><i class="fab fa-telegram"></i> </a>
  </div>
  </div>
  </div>
  </div>
</section>
