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

<form method="POST" action="result_featured.php">
<div class="text-center">
<div  class="row" style="margin-top: 72px;">
<div class="form-group col-md-3" style="margin: auto;"  >
		<label for="name">Name:</label>
		<input class="form-control" name="name" id="name" >
	</div>
</div>
	<br>
	<div class="form-group col-md-3" style="margin: auto;"  >
	<button class="btn btn-primary">Add featured</button>
	<div class="form-group col-md-3" style="margin: auto;"  >

</div>
</form>
 
 </body>
 </html>