<?php
include "includes/navigation1.php";
$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
?>
<?php 
$mail=$_POST['mail'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$password=$_POST['password'];
$Shipping_Address=$_POST['Shipping_Address'];
$Contact_number=$_POST['Contact_number'];
$Customer_id=$_GET['id'];
$password = md5($password);

 $sql=("UPDATE customer SET First_Name='$First_Name',Last_Name='$Last_Name',Shipping_Address='$Shipping_Address',Contact_number='$Contact_number',mail='$mail',password='$password' WHERE Customer_id=$Customer_id");
      $result=$db->query($sql) ;
      session_destroy();
      header("location:login.php");
 ?>