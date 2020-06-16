<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Welcome Admin</title>
	<style type="text/css">
		li{
			align-self: center;

		}
html,body {
  background-color: #303030;
  font-family: calibri;
}
	</style>
</head>
<body>
<?php
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	include "includes/navigation1.php";
?>
<?php 
session_start();
$id=$_SESSION['login_id'];
if (empty($id)) 
{
	header('location:../admin.php');
} 
?>


<div class="card bg-dark">
<ul class="list-group" style="margin-top: 180px;">
		     <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "msg=success") == true) {
echo '<div class="alert alert-success" style="margin-top=40px;">
  <strong>Success!</strong>New featured added
</div>'
;

}
?>
	  <li  ><a href="main_products.php"><button class="btn btn-primary" align="center">View Products</button></a></li>
		<br>
		<li ><a href="brands.php"><button class="btn btn-primary">Add Brand</button></a></li>
		<br>
		
	  <li ><a href="products.php"><button class="btn btn-primary">Add Product</button></a></li>
		<br>
	  <li ><a href="categories.php"><button class="btn btn-primary">Add Category</button></a></li>	
		<br>
	  <li ><a href="main_products.php"><button class="btn btn-primary">Edit Product</button></a></li>
		<br>
	  <li ><a href="main_products.php"><button class="btn btn-primary">Delete Product</button></a></li>
		<br>
		<li ><a href="featured.php"><button class="btn btn-primary">Add featured</button></a></li>
		<br>
		 <li ><a href="add_admin.php"><button class="btn btn-primary">Add admin</button></a></li>
		 <br>
	</ul>

</div>


	
        
			
		

</body>
</html>