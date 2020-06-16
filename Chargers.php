<!DOCTYPE html>
<html>
<head>
	<title>Chargers Section</title>
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
   
</head>
<body>

  <?php require_once "core/init.php" ?>
  <?php include ('includes/navigation.php') ?>


  
 <?php 
      $sql="SELECT * FROM products WHERE featured=11";
      $featured=$db->query($sql) ;
?>
<section class="arrivals">
 <div class="new-arrivals">
  <h1 align="center" style="margin-top: 130px;">Chargers</h1>


  <br>
      <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "msg=exceed") == true) {
echo '<div class="alert alert-danger" style="margin-top=40px;">
  <strong>Danger!</strong> Quantity not available
</div>'
;

}
else if(strpos($fullUrl, "msg=success") == true) {
echo '<div class="alert alert-success" style="margin-top=40px;">
  <strong>Success!</strong>Item added successfully to cart
</div>'
;

}

?>


  <div class="row">

  <?php
   while ($product = mysqli_fetch_assoc($featured)) : 
    ?>
     <div class="col-md-6 col-lg-3">
      <div class="card card-block bg-dark">
       <img class="card-img-top" src="<?= $product['image']; ?>"  style="height: 260px; width: 100%; display: block;">
 
       <h5 align="center"><?= $product['title']; ?></h5>
        <div class="text-center">
       <h5>Rs <?= $product['price']; ?></h5>
      
       </div>

  <div class="text-center">
     <button type="button" class="btn btn-tertiary" onclick="detailsmodal(<?= $product['product_id'];?>)" style="color: white">See Details</button>
  </div>
</div>
 </div>
   <?php endwhile ?>

</section>

<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://localhost:8080/Mobile%20Shopping/Chargers.php");
    }
</script>
  <?php include ('includes/footer.php') ?>

     
</body>
</html>