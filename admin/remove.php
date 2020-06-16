
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
          
<?php
	$con=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($con,'Mobile Shopping');
	$pro=$_GET['id'];
	$sql="DELETE from products where product_id=$pro";
	

	if (mysqli_query($con,$sql)) {
		header("location:main_products.php");
	}
	else
		echo "Not deleted";
?>


<?php
	include 'includes/footer.php';
?>


