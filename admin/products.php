<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/Mobile Shopping/core/init.php';
	include 'includes/head.php';
	include 'includes/navigation1.php';
?>
	<?php 
session_start();
$id=$_SESSION['login_id'];
if (empty($id)) 
{
	header('location:../admin.php');
} 
?>
<?php
	$brandQuery = $db->query("SELECT * FROM brand ORDER BY brand");
	$categoriesQuery = $db->query("SELECT * FROM categories WHERE id<>1 AND id<>2 ");
	$featuredQuery=$db->query("SELECT * FROM featured ORDER BY name ");
	$b='';
	$brand='';
	$categories='';
	$featured='';
	$p='';
?>
<style>
form,div,body{
	
  background-color: #303030;
  font-family: calibri;
}
button,label{
	color:white;
}
.row{
	background-color: #303030;
  font-family: calibri;
}
option{
	color:black;
}

</style>
</head>
<body>
	
<form method="POST" action="result.php">
<div class="text-center">
<div  class="row" style="margin-top: 71px;">
<div class="form-group col-md-3" style="margin: auto;"  >
		<label for="title">Title:</label>
		<input class="form-control" name="title" id="title" >
	</div>
	<div class="form-group col-md-3" style="margin: auto;">
		<label for="price">price:</label>
		<input class="form-control" name="price" id="price">
	</div>
	<div class="form-group col-md-3" style="margin: auto;">
		<label for="list_price">list_price:</label>
		<input class="form-control" name="list_price" id="list_price" >
	</div>
		
	
</div>
<br>

<div class="row">
	<div class="form-group col-md-3" style="margin: auto;" >
		<label for="brand">Brand*:</label>
		<select class="form-control" name="brand" id="brand">
			<option value=""<?php echo (($brand == '')?' selected' : ''); ?>></option>
			<?php while($b = mysqli_fetch_assoc($brandQuery)) : ?>
			<option value="<?php echo $b['id']; ?>"<?php echo (($brand == $b['id'])?' selected' : ''); ?>><?php echo $b['brand']; ?></option>
			<?php endwhile; ?>
		</select>
	</div>
		<div class="form-group col-md-3" style="margin: auto;">
		<label for="categories"> Category*:</label>
		<select class="form-control" name="categories" id="categories">
			<option value=""<?php echo (($categories == '')?' selected' : ''); ?>></option>
			<?php while($p = mysqli_fetch_assoc($categoriesQuery)) : ?>
			<option value="<?php echo $p['id']; ?>"<?php echo (($categories == $p['id'])?' selected' : ''); ?>><?php echo $p['category']; ?></option>
			<?php endwhile; ?>
		</select>
	</div>
		<div class="form-group col-md-3" style="margin: auto;">
		<label for="image">image:</label>
		<input class="form-control" name="image" id="image" >
	</div>

</div>
<br>
<div class="row">
		<div class="form-group col-md-5" style="margin: auto;" >
		<label for="description">description:</label>
		<textarea class="form-control" name="description" id="description" rows="5" ></textarea> 
	    </div>

           <div class="form-group col-md-3" style="margin: auto;">
		<label for="quantity">quantity:</label>
		<input class="form-control" name="quantity" id="quantity" >
	</div>

	    	<div class="form-group col-md-3" style="margin: auto;">
		<label for="featured"> Featured:</label>
		<select class="form-control" name="featured" id="featured">
			<option value=""<?php echo (($featured == '')?' selected' : ''); ?>></option>
			<?php while($p = mysqli_fetch_assoc($featuredQuery)) : ?>
			<option value="<?php echo $p['id']; ?>"<?php echo (($featured == $p['id'])?' selected' : ''); ?>><?php echo $p['name']; ?></option>
			<?php endwhile; ?>
		</select>
	</div>
	    <div class="form-group col-md-2" style="margin: auto;">
	    	<button class="btn btn-success">Add Product</button>
	    </div>	
	   
</div>
</div>	


</form>
<br>
   <div class="form-group col-md-2" style="margin: auto;" >
	    <a href="main_products.php"><button class="btn btn-primary">Edit Product</button></a>
	    </div>	
	    <br>

      <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "msg=incomplete") == true) {
echo '<p align="center">Fields empty!!</p>'
;

}
?>


<?php
	include 'includes/footer.php';
?>
</body>
</html>




