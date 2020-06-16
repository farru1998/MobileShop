 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	
include "includes/navigation.php";	
?>

<?php 
session_start();
$id=$_SESSION['mail'];

?>


<?php 
$sql=$db->query("SELECT * FROM customer WHERE mail='{$id}'");
$result=mysqli_fetch_assoc($sql);
$First_Name=$result['First_Name'];
$Last_Name=$result['Last_Name'];
$Shipping_Address=$result['Shipping_Address'];
$Contact_number=$result['Contact_number'];
$mail=$result['mail'];
$Customer_id=$result['Customer_id'];
$password=$result['password'];
$password = md5($password);
echo $password;



 ?>
 <style>
.card {
  color: #3d2d2d;
  /* just in case there no content*/
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  margin-top: 50px;
  /* shadows and rounded borders */
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
label{
	color: white;
}
body{
	background: #303030;
}
 </style>
 <form method="POST" action="afterupdate.php?id=<?php echo $Customer_id; ?>">

<div class="text-center">

<div  class="card bg-dark" style="max-width: 45rem;">
<div class="card-content">
<div  class="row" style="margin-top: 10px;">

<div class="col-md-6 col-sm-12 col-sm-12" style="margin: auto;"  >
		<label for="First_Name">First Name:</label>
		<input class="form-control" name="First_Name" id="First_Name" value="<?php echo $First_Name?>">
	</div>
	<div class="col-md-6 col-sm-12" style="margin: auto;">
		<label for="Last_Name">Last Name:</label>
		<input class="form-control" name="Last_Name" id="Last_Name" value="<?php echo $Last_Name?>">
	</div>
	
		
	
</div>
<div class="text-center">
<div  class="row" style="margin-top: 20px;">
<div class="col-md-6 col-sm-12" style="margin: auto;">
		<label for="Shipping_Address">Shipping Address:</label>
		<input class="form-control" name="Shipping_Address" id="Shipping_Address" value="<?php echo $Shipping_Address?>">
	</div>
<div class="col-md-6 col-sm-12" style="margin: auto;"  >
		<label for="Contact_number">Contact number:</label>
		<input class="form-control" name="Contact_number" id="Contact_number" value="<?php echo $Contact_number?>">
	</div>
	
	
</div>
<div  class="row" style="margin-top: 20px;">
<div class="col-md-6 col-sm-12" style="margin: auto;">
		<label for="mail">E-mail:</label>
		<input class="form-control" name="mail" id="mail" value="<?php echo $mail?>">
	</div>
	<div class="col-md-6 col-sm-12" style="margin: auto;">
		<label for="password">Password:</label>
		<input class="form-control" name="password" id="password" type="password" >
	</div>
	</div>
</div>
<br>
<div class="row">
<div class="col-lg-12">
<button class="btn btn-primary">Update</button>
</div>
</div>


</div>
</div>


</div>
</form>
