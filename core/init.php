
  
<?php
	$db = mysqli_connect('127.0.0.1', 'root', '', 'items');
	if(mysqli_connect_errno()) {
		echo 'Database connection failed with following errors: '.mysqli_connect_error();
		die();
	}
	require_once $_SERVER['DOCUMENT_ROOT'].'/Mobile Shopping/config.php';
	require_once BASEURL.'helpers/helpers.php';
	?>