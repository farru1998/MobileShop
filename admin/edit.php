
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
          
<?php

include "includes/navigation1.php";
session_start();
$id=$_SESSION['login_id'];
if (empty($id)) 
{
	header('location:../admin.php');
} 
?>
<?php
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	$brandQuery = $db->query("SELECT * FROM brand ORDER BY brand");
	$categoriesQuery = $db->query("SELECT * FROM categories WHERE id<>1 AND id<>2 ");
	$pro=$_GET['id'];
	$sql="SELECT * from products where product_id=$pro";
	$product=$db->query($sql);
	$result = mysqli_fetch_assoc($product);
	$title=$result['title'];
	$price=$result['price'];
	$list_price=$result['list_price'];
    $description=$result['description'];
    $image=$result['image'];
    $temp=$result['brand'];
    $brands=("SELECT brand from brand WHERE id=$temp");
    $brand=$db->query($brands);
    
    $categories=$result['categories'];
    $quantity=$result['quantity'];
    $featured=$result['featured'];
   // $featuredQuery=$db->query("SELECT * FROM featured ORDER BY name");
    $b='';
	$brand='';
	$categories='';
	$p='';
	$featured='';
	$f='';


	
?>




<form method="POST" action="afteredit.php?id=<?php echo $pro; ?>">
<div class="text-center">
<div  class="row" style="margin-top: 140px;">
<div class="form-group col-md-3" style="margin: auto;"  >
		<label for="title">Title:</label>
		<input class="form-control" name="title" id="title" value="<?php echo $title?>">
	</div>
	<div class="form-group col-md-3" style="margin: auto;">
		<label for="price">price:</label>
		<input class="form-control" name="price" id="price" value="<?php echo $price?>">
	</div>
	<div class="form-group col-md-3" style="margin: auto;">
		<label for="list_price">list_price:</label>
		<input class="form-control" name="list_price" id="list_price" value="<?php echo $list_price?>">
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
			<option value=""<?php echo (($categories == '')?' selected' : '<?php echo $categories?>'); ?>></option>
			<?php while($p = mysqli_fetch_assoc($categoriesQuery)) : ?>
			<option value="<?php echo $p['id']; ?>"<?php echo (($categories == $p['id'])?' selected' : ''); ?>><?php echo $p['category']; ?></option>
			<?php endwhile; ?>
		</select>
	</div>
		<div class="form-group col-md-3" style="margin: auto;">
		<label for="image">image:</label>
		<input class="form-control" name="image" id="image" value="<?php echo $image?>" >
	</div>

</div>
<br>
<div class="row">
		<div class="form-group col-md-5" style="margin: auto;" >
		<label for="description">description:</label>
		<textarea class="form-control" name="description" id="description" rows="5" value="<?php echo $description?>" ></textarea> 
	    </div>
	    <div class="form-group col-md-3" style="margin: auto;">
		<label for="featured">featured:</label>
		<input class="form-control" name="featured" id="featured" value="<?php echo $featured?>" >
	</div>

         <div class="form-group col-md-3" style="margin: auto;">
		<label for="quantity">quantity:</label>
		<input class="form-control" name="quantity" id="quantity" value="<?php echo $quantity?>" >
	</div>

	    <div class="form-group col-md-2" style="margin: auto;">
	    	<button class="btn btn-primary" >Edit Product</button>
	    </div>
	     <div align="center" class=" form-group col-lg-6" style="margin-bottom: 20px;">
	    	<a href="main_products.php"><button class="btn btn-danger" >Cancel</button></a>
	    </div>	
	
	   <table class="table">
	   	<thead>
	   		<th>id</th>
	   		<th>name</th>
	   	</thead>
	   	<tbody>
	   		<tr>
	   			<td>1</td>
	   			<td>Sale</td>
	   		</tr>
	   		<tr>
	   			<td>2</td>
	   			<td>New Arrival</td>
	   		</tr>
	   		<tr>
	   			<td>3</td>
	   			<td>Xiaomi Powerbank</td>
	   		</tr>
	   		<tr>
	   			<td>4</td>
	   			<td>Anker Powerbank</td>
	   		</tr>
	   		<tr>
	   			<td>5</td>
	   			<td>Samsung Powerbank</td>
	   		</tr>
	   		<tr>
	   			<td>7</td>
	   			<td>Beats earphones</td>
	   		</tr>
	   		<tr>
	   			<td>8</td>
	   			<td>Xiaomi earphones</td>
	   		</tr>
	   		<tr>
	   			<td>10</td>
	   			<td>Audionic earphones</td>
	   		</tr>
	   		<tr>
	   			<td>11</td>
	   			<td>All chargers</td>
	   		</tr>
	   		<tr>
	   			<td>12</td>
	   			<td>Iphone Mobile</td>
	   		</tr>
	   		<tr>
	   			<td>13</td>
	   			<td>Samsung Mobile</td>
	   		</tr>
	   		<tr>
	   			<td>14</td>
	   			<td>Xiaomi Mobile</td>
	   		</tr>
	   	</tbody>
	   </table>

         <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "msg=incomplete") == true) {
echo '<p align="center">Fields empty!!</p>'
;

}
?>

</div>
	  </div>
</form>  	



<?php
	include 'includes/footer.php';
?>


