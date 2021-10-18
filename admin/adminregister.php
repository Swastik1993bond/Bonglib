
<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:https://bonglib.in/admin/adminlogin');
}
//Header footer connection include
  define('CONSTANT',true);
  include "../header.php";
 
  require_once "../config.php";
  error_reporting(0);
  
  ?>
<style>
.top{
    background-color: #D0D3D4;
    background-image: url(../images/jess-bailey-designs-1018136.jpg);
    width: auto;
    height: 100vh;
    background-position:center;
    background-repeat: no-repeat;
    justify-content: center;
    align-items: center;
    background-repeat: none; 
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 50px;
    
}
.status{
  margin: auto;
  width: 50%;
  padding: 10px;
}

 </style>
<div class="top">
<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="john_doe" required>
     
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password" required>
    </div>
  
  <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="default input example">Name</label>
      <input class="form-control" type="text" name="name" placeholder="John Doe" aria-label="default input example" required>
    </div>
  <div class="form-group col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
</div>
  <button type="submit" class="btn btn-primary my-4">Sign in</button> </div>
</form>
</div>

<?php 
$user="$_POST[username]";
$s="SELECT * FROM `admintable` WHERE user='$user'";
$q=mysqli_query($conn,$s);
$t=mysqli_num_rows($q);
if ($t != 0)
{
while($r=mysqli_fetch_assoc($q))
{
echo " <p class='text-primary status'>The Username already taken.Please try another username. </p>";
 die();
   }
  }
 
if(isset($_POST['submit']))
$user="$_POST[username]";
$pass="$_POST[password]";
$confm_pass="$_POST[confirm_password]";
$name="$_POST[name]";
$email="$_POST[email]";

if($pass !=$confm_pass){
  echo "<div class='alert alert-primary alert-dismissible fade show status' role='alert'>
   Password and Confirm Password does not match. Please put again.</div>";
   die();
}
$str_pass = password_hash($pass,PASSWORD_BCRYPT);
$sql="INSERT INTO `admintable` (`user`, `pass`, `name`, `email`) VALUES ( '$user', '$str_pass', '$name', '$email')";
$data=mysqli_query($conn,$sql) or die("Can not insert data into database");
if($data)
{
  echo "<div class='alert alert-primary alert-dismissible fade show status' role='alert'>
  <strong> congratulation!</strong> Admin user create successfull.</div>";
           
}
else{
       echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
       <strong> Warning!</strong> Here a problem.</div>";
       
}
 ?>
</div>