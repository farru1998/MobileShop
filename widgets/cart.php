
  

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
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
  
 
 // include "../includes/navigation.php";

?>
<?php 
session_start();

$product_id=$_GET['id'];
echo $product_id;

$sql=$db->query("SELECT * FROM products WHERE product_id='{$product_id}'");
$result= mysqli_fetch_assoc($sql);

$title=$result['title'];
$price=$result['price'];
$image=$result['image'];
$Qty=$result['quantity'];  
$quantity=$_POST['quantity'];

if ($quantity > $Qty) {
	$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer?msg=exceed");

 // header('location:../home.php');

}
else
{

 
$products=array($product_id,$title,$price,$image,$quantity);
$_SESSION[$title]= $products;
//header("location:../home.php");
	$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer?msg=success");

 }
 ?>
</html>