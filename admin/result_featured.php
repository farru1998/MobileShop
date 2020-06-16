 <?php
	$db=mysqli_connect('127.0.0.1','root',' ','items');
	mysqli_select_db($db,'Mobile Shopping');
	include "includes/navigation1.php";
?>


<?php 

$name=$_POST['name'];
$sql="INSERT INTO featured(name) VALUES('$name')";
$result=$db->query($sql);
header("location:main.php?msg=success");


 ?>