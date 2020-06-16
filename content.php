<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
  <title>PHPMailer Test</title>
</head>
<body>
<?php 
session_start();
$email=$_SESSION['mail'];
require_once $_SERVER['DOCUMENT_ROOT'].'/Mobile Shopping/core/init.php';
$o_id=$_GET['id'];
$id2=$_GET['id1'];
echo "{$o_id}";

foreach ($_SESSION as $products) {
  $pro=0;
  $n=0;
  $i=0;
  $qty=0;
  $id=0;
  
    

//var_dump($_SESSION);
//die();
if (is_array($products) || is_object($products))
{


 foreach ($products as $key => $value) {

    #echo $key . "<hr />";

    if ($key == 4) 
    {
   
    $qty=$value;
   echo $qty;
      }
    elseif ($key == 3) {
           
    $i=$value;  
    echo $i;
    echo "<br>";
    }
    elseif($key == 2)
    {
      
    $pro=$value;
    echo $pro;
    echo "<br>";
    
    }
    elseif($key == 1)
    {
      
    $n=$value;
   //echo $n;
   echo "<br>";
    }
    elseif($key == 0)
    {
      $id=$value;
     // echo $id;
      echo "<br>";
    
    }
  } 

  ?>

<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">

  <div class="table">
  <table>

  <tr>
    <th style="border: 1px solid black; border-collapse: collapse;">Product Name</th>
    <th style="border: 1px solid black; border-collapse: collapse;">Price</th>
    <th style="border: 1px solid black; border-collapse: collapse;">Quantity</th>
  </tr>
  <tr>

   <td style="border: 1px solid black; border-collapse: collapse; align:center;"><?= $i ?></td>
   <td style="border: 1px solid black; border-collapse: collapse; align:center;"><?= $pro ?></td>
   <td style="border: 1px solid black; border-collapse: collapse; align:center;"><?= $qty ?></td>
  </tr>
  </table>
        
  
  </div>
  <?php }
            }
        ?>
  </div>
 <?php unset($_SESSION[$id2]);  
 header("location:mail.php") ; ?>
</div>
</body>
</html>