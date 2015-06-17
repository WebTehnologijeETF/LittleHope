<?php
	
session_start();

 if (isset($_SESSION['username'])){
		//$username = $_SESSION['username'];
		include 'AdminPanel.php';
		}
		else{ 
			include 'AdminLogin.php';
		}
?>