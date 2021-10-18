<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:https://bonglib.in/admin/adminlogin');
}

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Add favicon -->
	 <link rel="icon" href="../favicon.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Footer & Form CSS -->
  <style>
 .footer{
     background-color: #1c1918;
     display: flex;
     justify-content: center;
     align-items: center;
     position: relative;
     left: 0;
     bottom: 0;
     width: 100%;
 }
 .footer h6 {
    color: whitesmoke;
    margin: auto;
    width: 60%;
    text-align: center;
    padding: 10px;
 }

  #booktag{
    width:80%;
    margin: auto;
  }
  #booktable{
    width:95%;
    margin: auto;
  }
  
   .submitbutton {
    float: right;
    width: 100%;
    background-color: white;
    border: 1px solid #25383C;
    border-radius: 20px;
    color: #25383C;
}
.submitbutton:hover {
    background-color: #25383C;
    border: 1px solid #25383C;
    color: #ccc;
    
}
  
</style>
   
  <title>Bonglib</title>
  </head>
  <body>
   <!--nav started--> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="https://bonglib.in/"><i class="fas fa-book-reader"></i> Bonglib </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/admin/addbook.php">Add book</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/admin/dashboard.php#booktable">Book Table </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://bonglib.in/admin/adminregister.php">Create Admin </a>
        </li>
       </div>
       <div class="navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo $_SESSION['user'] ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://bonglib.in/admin/adminlogout"> <i class="fas fa-sign-out-alt"> Log Out</i></a> 
            
          </div>
        </li>
      </ul>
       </div>
     </div>
  </nav>

  <div class="container mt-4">
    <h3><?php echo "Welcome " . $_SESSION['user'] ?>! </h3>
    <hr>
  <!--Database connection--> 
  <?php
    include ("../config.php");
    error_reporting(0);
  ?>  
 <!-- Book table-->
<section id="booktable"><br><br>
<div class="col-12 col-sm-12 col-md-12 badge bg-primary text-light">
<h2>Book Table</h2> </div>
<?php
  $query="SELECT * FROM images ORDER BY id DESC";

  if($data= mysqli_query($conn,$query)){
      if(mysqli_num_rows($data) > 0){
          echo"<table class='table table-striped text-center'>";
          echo "<thead>
      <tr>
        <th scope='col'>Sl no</th>
        <th scope='col'>Cover</th>
        <th scope='col' colspan='2'>Operation</th>
      </tr>
    </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody><tr><td>".$row['id']."</td>
            <td><a href='../images/$row[image]'><img src='../images/$row[image]' width='75' height='100'></a></td>
            <td><a href='deletebook.php?id=$row[id]' class='btn btn-danger'><i class='far fa-trash-alt'></i></a></td>
            <td><a href='addtags.php?id=$row[id]&images=$row[image]' class='btn btn-danger'><i class='fas fa-tags'></i></a></td>
            </tr></tbody>";
        }
            echo "</table>";
              mysqli_free_result($data);
        } else{
            echo "No records found.";
        }
        } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
        } 
        
        ?>

</div> </section>
<!-- Book tag start-->
<section id="booktag">
<div class="col-12 col-sm-12 col-md-12 badge bg-primary text-light">
<h2>Books Tag</h2> </div>
<?php
  $query="SELECT * FROM `book_details` ORDER BY id DESC";

  if($data= mysqli_query($conn,$query)){
      if(mysqli_num_rows($data) > 0){
          echo"<table class='table table-striped text-center'>";
          echo "<thead>
      <tr>
        <th scope='col'>Sl no</th>
        <th scope='col'>Book Name</th>
        <th scope='col'>Authors</th>
        <th scope='col'>Cover</th>
        <th scope='col'>Category</th>
        <th scope='col'>Book Id</th>
        <th scope='col'>Tages</th>
        <th scope='col'>Operation</th>
      </tr>
    </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody><tr><td>".$row['id']."</td>
             <td> $row[Book_name] </td>
             <td> $row[Authors] </td>
            <td><a href='../images/$row[images]'><img src='../images/$row[images]' width='75' height='100'></a></td>
            <td> $row[Category] </td>
            <td> $row[Book_Id] </td>
            <td> $row[Tags] </td>
            <td><a href='https://bonglib.in/admin/deletetags.php?id=$row[id]' class='btn btn-danger'><i class='far fa-trash-alt'></i></a></td>
            </tr></tbody>";
        }
            echo "</table>";
              mysqli_free_result($data);
        } else{
            echo "No records found.";
        }
        } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
        } 
        
        ?> 
        </div>
</section></div>


<br> <br> <br> <br>
    <!---Add footer containt -->
    <div class="footer bg-dark col col-sm-12 col-lg-12">
    <p class=" justify-content-center text-light"> Copyright © <?php echo date("Y");?> </p>
 
  
  <!-- font awesome, jQuery , Popper.js, Bootstrap JS, ckeditor, JS code -->
  <script src="https://kit.fontawesome.com/eaf90380c6.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../ckeditor/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'editor' );

                        
                </script>

</body>
</html>