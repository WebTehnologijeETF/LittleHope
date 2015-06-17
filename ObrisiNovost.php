<?php

	$id=$_GET['Id'];
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $veza->exec("delete from novosti where id='".$id."'");
     echo 'You have successfully deleted the news!';




?>