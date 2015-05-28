<?php


	$username=$_GET['Username'];
	$password=$_GET['Password'];
	$Email=$_GET['Email'];
	
	$username = htmlEntities($_GET['Username'], ENT_QUOTES);
	$password = htmlEntities($_GET['Password'], ENT_QUOTES);
	$email= htmlEntities($_GET['Email'], ENT_QUOTES);
		$password=md5($password);
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
    	$veza->exec("set names utf8");
   	$dodavanje=$veza->prepare('INSERT INTO administratori(username,password,email)VALUES(:username,:password,:email)');
   	$dodavanje->bindParam(":username",$username);
   	$dodavanje->bindParam(":password",$password);
   	$dodavanje->bindParam(":email",$email);
   
   if($dodavanje->execute()){	
   echo "Uspješno ste dodali novost!";}
   else
   {
   		echo "Administarorski username mora biti jedinstven!";
   }


?>