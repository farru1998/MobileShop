
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  


<?php 
require_once '../core/init.php';
  $sql = "SELECT * FROM categories WHERE parent=0";
  $pquery = $db->query($sql); 
  ?>
<nav class="navbar navbar-expand-md  navbar-dark fixed-top" style="background-color: black">
  <a class="navbar-brand" href="main.php">
    <img src="../images/logo.png" class="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php 
session_start();
//  print_r($_SESSION["mail"]);
if (isset($_SESSION["login_id"])){
  echo"<form >
 <button class='btn btn-tertiary' style='color:white;'>";
 echo $_SESSION["login_id"];
 echo"</button>  
</form>
<form action='./logout_admin.php'>
<button class='btn btn-tertiary' style='color:white;'>Logout</button>  
</form>" ;
}
else{
echo "<form action='../admin.php' style='color:white;'>
<button class='btn btn-tertiary'>Sign In</button>  
</form>
<form action='signup.php'>
 <button class='btn btn-tertiary' style='color:white;'>Sign Up</button>  
</form>" ;

}

?>

 

</div>  

</nav> 


