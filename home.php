<!DOCTYPE html>
<html>
<head>
<title>Mobile Shop</title>



   <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Mobile Shopping/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
   
  <style>
  /* Make the image fully responsive */
  .carousel-inner img 
  {

    width: 100%;
    height: 650px;
    margin-top: 70px;
  }
  </style>
</head>


<body>

  <div id="demo" class="carousel slide" data-ride="carousel">


  <?php include ('includes/navigation.php') ?>




  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/maxresdefault (1).jpg" alt="iphone 11" >
    </div>
    <div class="carousel-item">
      <img src="images/mi9t.webp" alt="mi 9t">
    </div>
    <div class="carousel-item">
      <img src="images/5d2e0fb5a17d6c1ef2453f8d.jfif" alt="s10">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

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







	  <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh" ></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck" ></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock" ></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift" ></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->



<?php 

      $sql="SELECT * FROM products WHERE featured=1";
      $featured=$db->query($sql) ;
?>



<section class="sale">
 <div class="on-sale">
 	<h1 align="center" style="margin-top: 0">Sale</h1>


 	<br>



 	<div class="row">

  <?php
   while ($product = mysqli_fetch_assoc($featured)) : 
    ?>
 	   <div class="col-md-6 col-lg-3">
      <div class="card card-block bg-dark">
 	   	 <img class="card-img-top" src="<?= $product['image']; ?>"  style="height: 260px; width: 100%; display: block;">
 
 	   	 <h5 align="center"><?= $product['title']; ?></h5>
 	   	  <div class="text-center">
 	   	 <h5><ins>Rs <?= $product['price']; ?></ins></h5>
 	   	 <h5><del><?= $product['list_price']; ?></del></h5>
 	   	 </div>

 	<div class="text-center">
 	   <button type="button" class="btn btn-tertiary" onclick="detailsmodal(<?= $product['product_id'];?>)" style="color: white">See Details</button>
 	</div>
</div>
 </div>
   <?php endwhile ?>

</section>


<?php 

      $sql="SELECT * FROM products WHERE featured=2";
      $featured=$db->query($sql) ;
?>



<section class="arrivals">
 <div class="new-arrivals">
  <h1 align="center" style="margin-top: 0">New Arrival</h1>


  <br>



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
        window.history.pushState({}, "Hide", "http://localhost:8080/Mobile%20Shopping/home.php");
    }
</script>
<?php 

include 'includes/footer.php'; 

?>



