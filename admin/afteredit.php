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
//include "includes/navigation1.php";
$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
?>

</head>
<body>
<?php
$title=$_POST['title'];
$price=$_POST['price'];
$list_price=$_POST['list_price'];
$brand=$_POST['brand'];
$categories=$_POST['categories'];
$image=$_POST['image'];
$description=$_POST['description'];
$featured=$_POST['featured'];
$quantity=$_POST['quantity'];
$pro=$_GET['id'];

//$sql=$db->query("SELECT * FROM featured WHERE name='{$featured}'");
//$out=mysqli_fetch_assoc($sql);
//$feat=$out['id'];
//echo $feat;

if (empty($title) && empty($price) && empty($list_price) && empty($brand) && empty($categories) && empty($image) && empty($description) && empty($quantity) && empty($featured)) 
{
	header("location:products.php?msg=incomplete");
}
else{
 $sql=("UPDATE products SET title='$title',price='$price',list_price='$list_price',brand='$brand',categories='$categories',image='$image',description='$description',featured='$featured', quantity='$quantity' WHERE product_id=$pro");
      $result=$db->query($sql) ;
}
?>
<div class="text-center">
<h2 style="margin-top: 140px;">The product updated is as follows</h2>	
</div>

<table class="table table-bordered table-condensed table-striped">
	<thead>
	<th>Title</th>	
	<th>Price</th>
	<th>list_price</th>
	<th>Brand</th>
	<th>Categories</th>
	<th>Description</th>
	<th>Image</th>
	<th>Featured</th>
	<th>Quantity</th>
	</thead>
	<tbody>
		<td><?php echo "$title";?></td>
		<td><?php echo "$price";?></td>
		<td><?php echo "$list_price";?></td>
		<td><?php echo "$brand";?></td>
		<td><?php echo "$categories";?></td>
		<td><?php echo "$description";?></td>
		<td><img src='../<?php echo $image;?>' alt="monile" style="height: 10%;"></td>
		<td><?php echo "$featured";?></td>
		<td><?php echo "$quantity";?></td>
	</tbody>

</table>
<?php 
header( "refresh:3;url=main_products.php" );?>



</body>
<?php
	include 'includes/footer.php';
?>
</html>
