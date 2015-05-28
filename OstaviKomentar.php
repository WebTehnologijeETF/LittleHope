<?php
		
	$idNovosti=$_GET['Id'];
	$Name=$_GET['Name'];
	$Email=$_GET['Email'];
	$Tekst=$_GET['Tekst'];
	$Name = htmlEntities($_GET['Name'], ENT_QUOTES);
  	$Email = htmlEntities($_GET['Email'], ENT_QUOTES);
  	$Tekst = htmlEntities($_GET['Tekst'], ENT_QUOTES);
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
    	$veza->exec("set names utf8");
   	$dodavanje=$veza->prepare('INSERT INTO komentari(Autor,Email,Tekst,Novost)VALUES(:autor,:email,:tekst,:id)');
   	$dodavanje->bindParam(":autor",$Name);
   	$dodavanje->bindParam(":email",$Email);
   	$dodavanje->bindParam(":tekst",$Tekst);
   	$dodavanje->bindParam(":id",$idNovosti);
   	$dodavanje->execute();
   	echo "Uspješno ste dodali komentar!";
   	


  ?>