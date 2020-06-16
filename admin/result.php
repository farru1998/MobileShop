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
	include 'includes/navigation1.php'
?>
<style>
		body,table{
	color: #303030;
  font-family: calibri;
	}
</style>
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
$quantity=$_POST['quantity'];
$featured=$_POST['featured'];

if (empty($title) && empty($price) && empty($list_price) && empty($brand) && empty($categories) && empty($image) && empty($description) && empty($quantity) && empty($featured)) 
{
	header("location:products.php?msg=incomplete");
}
else
{
 $sql="INSERT INTO products (title, price, list_price, brand, categories, image, description,quantity,featured) VALUES('$title','$price','$list_price','$brand','$categories','$image','$description','$quantity','$featured')";
      $result=$db->query($sql) ;
}
?>
<div class="text-center">
<h2 style="margin-top: 140px;">The new product entered is as follows</h2>	
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
	<th>Quantity</th>
	<th>Featured</th>
	</thead>
	<tbody>
		<td><?php echo "$title";?></td>
		<td><?php echo "$price";?></td>
		<td><?php echo "$list_price";?></td>
		<td><?php echo "$brand";?></td>
		<td><?php echo "$categories";?></td>
		<td><?php echo "$description";?></td>
		<td><img src='../<?php echo $image;?>' alt="monile" style="height:10%"></td>
		<td><?php echo "$quantity";?></td>
		<td><?php echo "$featured";?></td>
	</tbody>

</table>
	


<?php 
header( "refresh:3;url=main_products.php" );?>
</body>
<?php
	include 'includes/footer.php';
?>
</html>

