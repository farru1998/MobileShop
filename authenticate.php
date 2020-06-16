<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    
<?php
	$db=mysqli_connect('127.0.0.1','root','','items');
	mysqli_select_db($db,'Mobile Shopping');
	
	
?>

<?php
session_start(); // For having the access to the session,this line must be written in the start of every PHP page.
 
 
?>

<?php
$mail=$_POST['mail'];
echo $mail;
$password=$_POST['password'];
echo $password;
$password = md5($password);
 $query=("SELECT * FROM customer WHERE mail='$mail' AND password='$password'");

$results = mysqli_query($db, $query);
if(mysqli_num_rows($results)==1)
	{
				$_SESSION['mail'] = $mail;
				header('location: home.php?id=$mail');
	
	}
else
{
header('location: login.php?status=wrong');


 }
?>





<?php
	include 'includes/footer.php';
?>


