<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
	include 'includes/navigation.php';
	$mail=" ";
	$First_Name=" ";
	$Last_Name=" ";
	$Shipping_Address=" ";
	$Contact_number=" ";
	$password=" ";
?>

</head>
<body>
<?php
$mail=$_POST['mail'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Shipping_Address=$_POST['Shipping_Address'];
$Contact_number=$_POST['Contact_number'];
$password=$_POST['password'];
if (empty($First_Name) || empty($Last_Name) || empty($Shipping_Address) || empty($password) || empty($mail)) {
	header("location:signup.php?signup=empty");
	exit();
}

else
{
$password = md5($password);
 $sql="INSERT INTO customer (First_Name, Last_Name, Shipping_Address, Contact_number, mail, password) VALUES('$First_Name','$Last_Name','$Shipping_Address','$Contact_number','$mail','$password')";
      $result=$db->query($sql) ;
     header("location:login.php") ;
  }
?>
<div class="text-center">
<h2 style="margin-top: 140px;">The new customer entered is as follows</h2>	
</div>

<table class="table table-bordered table-condensed table-striped">
	<thead>
	<th>First_Name</th>	
	<th>Last_Name</th>
	<th>Shipping_Address</th>
	<th>Contact_number</th>
	<th>mail</th>
	
	</thead>
	<tbody>
		<td><?php echo "$First_Name";?></td>
		<td><?php echo "$Last_Name";?></td>
		<td><?php echo "$Shipping_Address";?></td>
		<td><?php echo "$Contact_number";?></td>
		<td><?php echo "$mail";?></td>
		
	</tbody>

</table>
	



</body>
<?php
	include 'includes/footer.php';
?>
</html>

