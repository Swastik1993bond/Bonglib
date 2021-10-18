<?php
 


//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome");
                            
                        }
                    }

                }

    }
}    


}
define('CONSTANT',true);
include("header.php");
include("nav.php");
?>

<!--Admin login--> 
<div class="alert alert-primary text-center " role="alert">
 Admin Log in here <a href="admin/dashboard" class="btn btn-outline-primary btn-sm ">Log in</a>
 </div>
 
 <!--User login form-->
<div class="container mt-2">
<div class="row text-center">
    <div class="col col-12 col-lg-6 col-md-12 col-sm-12">
      <img src="images/musician.png" width="400px" class="img-fluid" >
    </div>
    <div class="col col-12 col-lg-6 col-md-12 col-sm-12"><br><br>
<h4>Please Login Here:</h4>
<hr>

<form action="" method="post">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check mt-2">
   <label class="form-check-label " for="exampleCheck1"> New here ? </label>
    <a href="register.php">Sign up</a>
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
  </div>

</div>
<br><br><br>
  <?php include("footer.php");?>