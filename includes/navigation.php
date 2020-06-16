
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
   rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 

  require_once $_SERVER['DOCUMENT_ROOT'].'/Mobile Shopping/core/init.php';
  $sql = "SELECT * FROM categories WHERE parent=0";
  $pquery = $db->query($sql); 
  ?>

<nav class="navbar navbar-expand-lg  navbar-dark fixed-top" style="background-color: black">

  <a class="navbar-brand" href="home.php">
    <img src="images/logo.png" class="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <?php while ($parent = mysqli_fetch_assoc($pquery)) : ?>
        <?php $parent_id = $parent['id'];
        $sql2= "SELECT * FROM categories WHERE parent = '$parent_id'";
        $cquery = $db->query($sql2); 
    ?>

<!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white">
        <?php echo $parent['category']; ?>
      </a>
     
      <ul class="dropdown-menu" role="menu">
        <?php while ($child = mysqli_fetch_assoc($cquery)) : ?>
        <li><a class="dropdown-item" href="<?php echo $child['category'];?>.php"><?php echo $child['category'];?></a></li>
        <?php endwhile; ?>
   
      </ul>
    </li>
<?php endwhile; ?>
       

</div>  


<ul class="nav navbar-nav navbar-right">
<?php 
session_start();
//  print_r($_SESSION["mail"]);
if (isset($_SESSION["mail"])){
  
  echo "<li><a href='update.php'><button class='btn btn-tertiary' style='color:white;'>Update Info</button></a></li>";
  echo"<form >

<li><button class='btn btn-tertiary' style='color:white;'>";
echo $_SESSION["mail"];
echo"</button></li>  
</form>
<form action='logout.php'>
<li><button class='btn btn-tertiary' style='color:white;'>Logout</button></li>  

</form>" ;
echo "<li><a href='widgets/shopping_cart.php'><i class='fa fa-shopping-cart' style='font-size:36px'></i></a></li>";
}
else{
  echo "<li><a class='btn btn-xs btn-default' href='widgets/shopping_cart.php'><i class='material-icons'>shopping_cart</i></a></li>";
echo "<form action='login.php'>
<li><button class='btn btn-tertiary' style='color:white'>Sign In</button></li>  
</form>
<form action='signup.php'>
 <li><button class='btn btn-tertiary' style='color:white'>Sign Up</button></li>  
</form>" ;

}

?>

</ul>

<!--<input type ="text" name="search" placeholder="Search">
	
 -->
</nav> 


