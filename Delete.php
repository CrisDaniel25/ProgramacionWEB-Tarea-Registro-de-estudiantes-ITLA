<?php 
	session_start();
	if(array_key_exists('data', $_SESSION) AND !empty($_SESSION['data'])){
		unset($_SESSION['data'][$_GET['id']]);
		header('location:index.php');
	}

 ?>