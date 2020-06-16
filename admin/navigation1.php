
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php 
require_once '../core/init.php';
  $sql = "SELECT * FROM categories WHERE parent=0";
  $pquery = $db->query($sql); 
  ?>
<nav class="navbar navbar-expand-md  navbar-dark fixed-top" style="background-color: black">
  <a class="navbar-brand" href="../main.php">
    <img src="../images/logo.png" class="logo">
  </a>
  

 
<form action="../login.php">
 <button class="btn btn-tertiary">Sign In</button>  
</form>
<button class="btn btn-tertiary">Sign Up</button> 

 
</nav> 


