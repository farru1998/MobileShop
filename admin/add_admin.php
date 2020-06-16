<!DOCTYPE html>
<html>
<head>
	<title>Add admin</title>
	 <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

<?php


   require_once '../core/init.php';
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	include 'includes/head.php';
	include 'includes/navigation1.php';
	
?>

<?php 
session_start();
$login_id=$_SESSION['login_id'];
if (empty($login_id)) 
{
	header('location:../admin.php');
} 
?>
<style>
		html,body,form{
		background-color: #303030;
	font-family: calibri;
	}
	label{
		color: white;
	}
</style>
</head>
<body>
	

<form method="POST" action="after_add.php">
<div class="text-center">
<div  class="row" style="margin-top: 140px;">
<div class="form-group col-md-3" style="margin: auto;"  >
		<label for="name">Name:</label>
		<input class="form-control" name="name" id="name" >
	</div>
	<div class="form-group col-md-3" style="margin: auto;">
		<label for="login_id">Login_id</label>
		<input class="form-control" name="login_id" id="login_id" type="email">
	</div>
	<div class="form-group col-md-3" style="margin: auto;">
		<label for="password">Password:</label>
		<input class="form-control" name="password" id="password" type="password">
	</div>
		
	
</div>
<br>
</div>
<br>
   <div class="form-group col-md-2" style="margin: auto;" >
	    <button class="btn btn-primary">Add admin</button>
	    </div>
	    <br>
	     <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "msg=incomplete") == true) {
echo '<p align="center">Fields empty!!</p>'
;

}
?>	
</form>
</body>
</html>
     