<?php
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	
?>
<?php 
session_start();

$product_id=$_POST['title0'];
$title=$_POST['title1'];
$price=$_POST['title2'];
$image=$_SESSION['image'];
//echo $image;
$quantity=$_POST['title4'];
$event=$_POST['event'];

//$message = "";

//$AvailQty = $obj->productAvailable($pid, $quantity);

//if ($AvailQty[0]["Qty"] > 0 )
$sql=$db->query("SELECT * FROM products WHERE title='$title'");
$output = mysqli_fetch_assoc($sql);
$result=$output['quantity'];
	$products = array($product_id,$title,$price,$image,$quantity);
	if($event == "Update")
	{
		if ($quantity > $result) 
		{
			header('location:shopping_cart.php?msg=exceed');
		}
		else
		{
		$_SESSION[$title]=$products;
		header('location:shopping_cart.php?msg=success');
			
		}
		
	}
	else if($event="Delete")
	{
		unset($_SESSION[$title]);
		header('location:shopping_cart.php');
	}





 ?>