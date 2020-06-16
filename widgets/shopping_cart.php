
<?php 
  $db=mysqli_connect('127.0.0.1','root','','items');
  mysqli_select_db($db,'Mobile Shopping');
?>
<?php 
session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <title>Mobile Shop</title>
 
<style type="text/css">
  img
  {
    height: 140px;
    width: 210px;
  }
  body{
    background-color: #303030;
  }
  h1,h2,th,td{
    color: white;
  }
</style>

 </head>
 <body>
  <div class="container">
  <div class="row">
  <div class="col-lg-12 ">
  <h1>Shopping Cart</h1>
    <center>
      <a href="../home.php" class="btn btn-warning col-lg-2">Home</a>
      <a href="shopping_cart.php" class="btn btn-warning col-lg-2">Cart</a>
    </center>
    <br>
    <br>
    <h2 align="center">Your cart products</h2>
  <table class="table">
    <thead>
      <tr>
       
       <th>Sno.</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
         <th>Quantity</th>
         <th>Total price</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $bill=0;
      $sno=0;
      $grandtotal=0;
      
     /*var_dump($_SESSION);
      die();*/


     
        foreach ($_SESSION as $products) {
          $p=0;
          $n=0;
          $i=0;
          $q=0;
          
            

//var_dump($_SESSION);
//die();
if (is_array($products) || is_object($products))
{
        // var_dump($products);
         //die();
  echo "<tr>";

         echo "<form action='edit_quantity.php' method='POST'>";
    

         foreach ($products as $key => $value) {
        
            //echo $key . "<hr />";

            if ($key == 4) 
            {
            echo "<td><input type='text' name='title$key' class='form-control' value='".$value."'</td>";  
            $q=$value;
              }
            elseif ($key == 3) {
                 echo "<td><img src='../$value' alt='img' value='".$value."' ></td>";  
            $i=$value;  
            $_SESSION['image'] = $i;
           // echo $i;
            }
            elseif($key == 2)
            {
               echo "<td><input type='hidden' name='title$key' value='".$value."'>".$value."</td>";  
            $p=$value;
            }
            elseif($key == 1)
            {
              echo "<td><input type='hidden' name='title$key' value='".$value."'>".$value."</td>";  
            $n=$value;
            }
            elseif($key == 0)
            {
              echo "<td><input type='hidden' name='title$key' value='".$value."'>".$value."</td>";  
            
            }
          
          
            
          }
          
          
          $bill=($q * $p);
          $grandtotal=$grandtotal+$bill;
          echo "<td>Rs".($bill)."</td>";
          echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
           echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
           echo "</form>";
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullUrl, "msg=exceed") == true) {
  echo "<p class='error'>This quantity is not available !</p>";
  exit();
}
          echo "</tr>";
          }
          
        }
      echo "<tr>";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td>Grand Total</td>";
      echo "<td>Rs".($grandtotal)."</td>";
      echo "<td> <a href='placeorder.php?total=$grandtotal'><button class='btn btn-primary'>Confirm</button></a></td>";
     
      echo "</tr>";         

 
       
       ?>

    </tbody>
  </table>
  </div>
  
  </div>
   


  </div>
 
 </body>
 </html>

