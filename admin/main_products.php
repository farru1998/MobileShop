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


//require_once '../core/init.php';
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	include 'includes/head.php';
	include 'includes/navigation1.php';
	$product=$db->query("SELECT * FROM products");
?>
<?php 
session_start();
$login_id=$_SESSION['login_id'];
if (empty($login_id)) 
{
	header('location:../admin.php');
} 
?>











<style type="text/css">
	img
	{
		height: 10%;
		width: 100%;
	}
	table{
		background-color: #303030;
  font-family: calibri;
	}
	th,td{
		color: white;
	}
</style>








<table class="table table-bordered table-condensed table-striped" style="margin-top: 72px;">
	<thead>
		<th>Edit</th>
		<th>Title</th>
		<th>Price</th>
	    <th>List_price</th>
	    <th>Brand</th>
	    <th>Categories</th>
	    <th>Description</th>
	    <th>Image</th>
	    <th>Quantity</th>
	    <th>featured</th>
	    
	    <th>Delete</th>
	</thead>
	<tbody>



		<tr>
			
		<?php while($result = mysqli_fetch_assoc($product)) : ?>
			<td><a class="btn btn-xs btn-default" href= edit.php?id=<?php echo $result['product_id']; ?> ><i class="material-icons" >
edit
</i></a></td>
			<td><?php echo $result['title']; ?></td>
			<td><?php echo $result['price']; ?></td>
			<td><?php echo $result['list_price']; ?></td>
			<?php $out=$result['brand'];
			$res=$db->query("SELECT brand from brand WHERE id=$out")?>
			<?php while($result1 = mysqli_fetch_assoc($res)) : ?>
			<td><?php echo $result1['brand']; ?></td>
		<?php endwhile?>
			
			<?php 
			 $out1=$result['categories'];
			$res1=$db->query("SELECT category from categories WHERE id='{$out1}'");
			?>

			<?php while($output = mysqli_fetch_assoc($res1)) : ?>
			<td><?php echo $output['category']; ?></td>
		<?php endwhile?>
			
			<td><?php echo $result['description']; ?></td>
			<td><img src="../<?php echo $result['image'];?>"></td>	
			<td><?php echo $result['quantity']; ?></td>
			<td><?php echo $result['featured']; ?></td>
			<td><a class="btn btn-xs btn-default" href= remove.php?id=<?php echo $result['product_id']; ?>><i class="material-icons">delete</i></a></td>
			<td><?php echo $result['product_id']; ?></td>

		</tr>

		
		<?php endwhile ?>
	</tbody>
</table>

