<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    

	 <!-- Add favicon -->
	 <link rel="icon" href="../favicon.png" type="image/png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<!-- Add CSS -->
<title>Admin Login-Bonglib.in</title>
</head>
<body>
<style> 
    *{
	margin: 0;
	padding: 0;
}

.center-div{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: -webkit-linear-gradient(bottom, #F8F6F687, #372C50);
}

.heading{
	width: 100%;
	line-height: 80px;
	font-size: 1.4rem;
	background: #150638;
	font-family: 'Staatliches', cursive;
}

form{
	width: 400px;

}
    </style>


<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="adminlogin.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-dark" name="submit" >
				</form>
			</div>
		</div>
	</div>
</header>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
session_start();
require_once "../config.php";
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($conn, $_POST['user']);
	$password = mysqli_real_escape_string($conn, $_POST['pass']);
    
	$sql = " select * from  admintable where user='$username'";
	$query = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($query);
    if($row > 0){
       
      while($row = mysqli_fetch_array($query)){
		$str_pass  = $row['pass'];
		  $pass_check= password_verify($password,$str_pass);
	  } }
		  if($pass_check){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location: https://bonglib.in/admin/dashboard.php');
		}else{
			echo "login failed";
			header('location: https://bonglib.in/admin/adminlogin');
		}

}


?>