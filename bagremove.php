

<?php 
include ("config.php");
define('CONSTANT',true);
include ("header.php");
 

error_reporting(0);

//$id=mysqli_real_escape_string($conn,$_GET['id']);
$id=mysqli_real_escape_string($conn,$rid);
$query="DELETE FROM `bag` WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{  
   
   echo header("Location:welcome");
   '<script type="text/javascript"> alert("Deleted successfull")  </script>';
   
}
else
{
   echo header("Location:welcome");
   '<script type="text/javascript"> alert("Data not deleted")  </script>';
}
?>

</div>
