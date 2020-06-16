<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
    
<?php
//include "includes/navigation1.php";
$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
?>

</head>
<body>
<?php
$name=$_POST['name'];
$login_id=$_POST['login_id'];
$password=$_POST['password'];



//$sql=$db->query("SELECT * FROM featured WHERE name='{$featured}'");
//$out=mysqli_fetch_assoc($sql);
//$feat=$out['id'];
//echo $feat;

if (empty($name) && empty($login_id) && empty($password)) 
{
	header("location:add_admin.php?msg=incomplete");
}
else{
  $password=md5($password);
 $sql=("INSERT INTO admin(login_id,password,name) VALUES ('$login_id','$password','$name')");
      $result=$db->query($sql) ;
header( "location: main.php" );
}
?>
