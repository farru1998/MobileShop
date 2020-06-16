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

<style type="text/css">
	.table table-bordered table-striped table-auto table-condensed
	{
		margin-left:20px;
		margin-right: 20px;
		background-color: #303030;
	}
	body,form,table{
		background-color: #303030;
	font-family: calibri;
	
	}
	th,td,label,div,h2{
		color: white;
		background-color: #303030;
	}
	.text-center{
		background-color: #303030;
	}
</style>
<?php
require_once '../core/init.php';
	include 'includes/head.php';
	include 'includes/navigation1.php';

?>

</head>
<?php 
<body>
$results = $db->query("SELECT * FROM brand ORDER BY brand");
$errors = array();


session_start();
$id=$_SESSION['login_id'];
if (empty($id)) 
{
header('location:../admin.php');
} 


	// Edit brand
	if(isset($_GET['edit']) && !empty($_GET['edit'])) {
		$edit_id = (int)$_GET['edit'];
		$edit_id = sanitize($edit_id);
		$edit_result = $db->query("SELECT * FROM brand WHERE id = '{$edit_id}'");
		$eBrand = mysqli_fetch_assoc($edit_result);
	}
	// Delete brand
	if(isset($_GET['delete']) && !empty($_GET['delete'])) {
		$delete_id = (int)$_GET['delete'];
		$delete_id = sanitize($delete_id);
		$db->query("DELETE FROM brand WHERE id = '{$delete_id}'");
		header("Location: brands.php");
	}
	if(isset($_POST['add_submit'])) {
		$brand = sanitize($_POST['brand']);
		// Check if brand is blank
		if($brand == '') {
			$errors[] .= 'You must enter a brand!';
		}
		// Check if brand exist in database
		$sql = "SELECT * FROM brand WHERE brand = '{$brand}'";
		if(isset($_GET['edit'])) {
			$sql = "SELECT * FROM brand WHERE brand = '{$brand}' AND id != '{$edit_id}'";
		}
		$result = $db->query($sql);
		$count = mysqli_num_rows($result);
		if($count > 0) {
			$errors[] .= $brand.' already exist. Please choose another brand name.';
		}
		// Display errors
		if(!empty($errors)) {
			echo display_errors($errors);
		} else {
			// Add brand to database
			$sql = "INSERT INTO brand (brand) VALUES ('{$brand}')";
			if(isset($_GET['edit'])) {
				$sql = "UPDATE brand SET brand = '{$brand}' WHERE id = '{$edit_id}'";
			}
			$db->query($sql);
			header('Location: brands.php');
		}
	}
?>
<h2 class="text-center" style="margin-top: 10px;">Brands</h2>
<hr>

<div class="text-center">
	<form class="form-inline" style="margin-left: 20px;" action="brands.php<?php echo ((isset($_GET['edit']))?'?edit='.$edit_id : ''); ?>" method="post">
		<div class="form-group">
			<label for="brand" style="margin-left: 10px;"><?php echo ((isset($_GET['edit']))?'Edit' : 'Add a'); ?> Brand 
			</label>

			<?php
				$brand_value = '';
				if(isset($_GET['edit'])) {
					$brand_value = $eBrand['brand'];
				} else {
					if(isset($_POST['brand'])) {
						$brand_value = sanitize($_POST['brand']);
					}
				}
			?>
			<div class="text-center">
			<input class="form-control" type="text" style="margin-left: 20px;" name="brand" id="brand" value="<?php echo $brand_value; ?>">
			<?php if(isset($_GET['edit'])) : ?>
				<a class="btn btn-default" href="brands.php">Cancel</a>
			<?php endif; ?>	
			</div>
		
			<div class="text-center">
			<input style="margin-left: 5px;" class="btn btn-success" type="submit" name="add_submit" value="<?php echo ((isset($_GET['edit']))?'Edit' : 'Add'); ?> Brand">	
			</div>
			
		</div>
	</form>
</div>
<hr>
<div align="center" class="table-responsive">
<table class="table" >
	<thead>
		
		<th>Brand</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody style="align-items: center;">
		<?php while($brand = mysqli_fetch_assoc($results)) : ?>
		<tr>
			<td><?php echo $brand['brand']; ?></td>
			<td><a class="btn btn-xs btn-default" href="brands.php?edit=<?php echo $brand['id']; ?>"><i class="material-icons" >
edit
</i></a></td>
			
			<td><a class="btn btn-xs btn-default" href="brands.php?delete=<?php echo $brand['id']; ?>"><i class="material-icons">
delete
</i></a></td>
		</tr>
		<?php endwhile; ?>
	</tbody>
</table>
	

</div>

<?php
	include 'includes/footer.php';?>
</body>
</html>
