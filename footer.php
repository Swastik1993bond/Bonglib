<?php if(!defined('CONSTANT')){
  die();
} ?>

<style>
 .footer{
     background-color: #1c1918;
     justify-content: center;
     align-items: center;
     position: relative;
     left: 0;
     bottom: 0;
     width: 100%;
     margin-top: auto;
   
 }

 .footer_nav{
   display:flex;
   justify-content: center;
   align-items: center;
   border-bottom-style: solid;
   border-bottom-color: #4C5052;
  
   
 }
 .footer p {
    color: whitesmoke;
    margin: auto;
    width: 60%;
    text-align: center;
    padding: 10px;
 }
 .footer a {
   color:#C6C8C9;
   
 }
 .footer a:hover{
   color:whitesmoke;
  
 }
 
</style>
    <!---Add footer containt -->
    <div class="footer  bg-dark col col-sm-12 col-lg-12">
      <div class="footer_nav">
    <ul class="nav justify-content-center ">
        <li class="nav-item">
          <a class="nav-link " href="https://bonglib.in/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://bonglib.in/home#about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://bonglib.in/home#contact">Contact us</a>
        </li></ul></div>
        <div class="lower">
    <p class="text-white-50"> Copyright © <?php echo date("Y");?> </p>
</div></div>

<!-- Separate Popper and Bootstrap JS -->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Font awesome js script! -->

    <script src="https://kit.fontawesome.com/eaf90380c6.js" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


  </body>
</html>