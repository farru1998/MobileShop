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
$login_id=$_POST['login_id'];
echo $login_id;
$password=$_POST['password'];
$password=md5($password);
echo $password;

 $query=("SELECT * FROM admin WHERE login_id='$login_id' AND password='$password'");

$results = mysqli_query($db, $query);
if(mysqli_num_rows($results)==1)
	{
				$_SESSION['login_id'] = $login_id;
				header('location: admin/main.php?id=$login_id');
	
	}
else
{
header('location: admin.php?status=Incorrect Password');


 }
?>





<?php
	include 'includes/footer.php';
?>


