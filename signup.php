<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	 <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/Mobile Shopping/core/init.php';
	include 'includes/head.php';?>
</head>
<style>
	body{
		background-color: #303030;
	}
	button,label,a{
		color: white;
	}
	.card{
		margin-top: 140px;
	}
</style>
<body>
	
<nav class="navbar navbar-expand-md  navbar-dark fixed-top" style="background-color: black">
  <a class="navbar-brand" href="home.php">
  	<img src="images/logo.png" class="logo">
  </a>
  <a href='home.php' ><button class='btn btn-tertiary' align='right' style='color:white'>Home</button></a>
</nav>
<form method="POST" action="aftersignup.php">
<div class="text-center">
	<div class="card bg-dark" style="max-width: 45rem;">
	<div class="card-content">
	<div  class="row" style="margin-top: 20px;">
<div class="form-group col-lg-6 col-sm-6" style="margin: auto;"  >
		<label for="First_Name">First_Name:</label>
		<input class="form-control" name="First_Name" id="First_Name" >
	</div>
	<div class="form-group col-lg-6 col-sm-6" style="margin: auto;">
		<label for="Last_Name">Last_Name:</label>
		<input class="form-control" name="Last_Name" id="Last_Name">
	</div>
	
		
	
</div>
<br>

<div class="row">
<div class="form-group col-lg-6 col-sm-6" style="margin: auto;">
		<label for="Shipping_Address">Shipping_Address:</label>
		<input class="form-control" name="Shipping_Address" id="Shipping_Address" >
	</div>
	<div class="form-group col-lg-6 col-sm-6" style="margin: auto;" >
		<label for="Contact_number">Contact_number*:</label>
		<input class="form-control" name="Contact_number" id="Contact_number">
		
	</div>
	</div>

	<div class="row">
	<div class="form-group col-lg-6 col-sm-6" style="margin: auto;">
		<label for="mail"> Mail*:</label>
		<input class="form-control" name="mail" id="mail" type="email">
	</div>
		<div class="form-group col-lg-6 col-sm-6" style="margin: auto;">
		<label for="password">password:</label>
		<input class="form-control" name="password" id="password" type="password" >
	</div>
	</div>
		


<br>
<div class="row">
	
			    <div class="form-group col-12" style="margin: auto;">
	    	<button class="btn btn-success">Confirm Details</button>
	    </div>	
	   
</div>
</div>	
	</div>
	


	</div>

	</form>

<?php 
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "signup=empty") == true) {
	echo "<br><p class='error' align='center'>You did not fill all fields !</p>";
	exit();
}
else if(strpos($fullUrl, "signup=email") == true)
{
	echo "<p>Invalid email</p>";
	exit();
}

 ?>
<!-- /container -->
</body>
</html>