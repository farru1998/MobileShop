<?php 
	session_start(); 
		session_destroy();
		unset($_SESSION['mail']);
		header("location: home.php");
?>