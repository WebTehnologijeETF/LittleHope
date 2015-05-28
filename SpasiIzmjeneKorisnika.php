<?php

	$id=$_GET['Id'];
	$username=$_GET['Username'];
	$password=$_GET['Password'];
	$email=$_GET['Email'];
	$id= htmlEntities($_GET['Id'], ENT_QUOTES);
	$username = htmlEntities($_GET['Username'], ENT_QUOTES);
	$password = htmlEntities($_GET['Password'], ENT_QUOTES);
	$email= htmlEntities($_GET['Email'], ENT_QUOTES);
	
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->prepare("update administratori set username='".$username."', password='".$password."', email='".$email."' where username='".$id."'");
		   if($rezultat->execute())
		   {
		   			echo "uspjesno ste promjenili admina!";
		   }
		   else
		   {
		   	echo "Username mora biti jedinstven!";
		   }
?>