<?php 
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['create'])) {
			if (!isset($_SESSION['data'])) {
				$_SESSION['data'] = array();
			}
			$_SESSION['data'][] = $_POST;
			header('location:index.php');
		}
	}
 ?>