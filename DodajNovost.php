<?php

	$naslov=$_GET['Naslov'];
	$autor=$_GET['Autor'];
	$slika=$_GET['Slika'];
	$tekst=$_GET['Opis'];
	$detTekst=$_GET['DetaljnijiOpis'];
	$date = date('Y-m-d H:i:s');
	echo $date;
	$naslov = htmlEntities($_GET['Naslov'], ENT_QUOTES);
	$autor = htmlEntities($_GET['Autor'], ENT_QUOTES);
	$slika= htmlEntities($_GET['Slika'], ENT_QUOTES);
	$tekst = htmlEntities($_GET['Opis'], ENT_QUOTES);
	$detTekst = htmlEntities($_GET['DetaljnijiOpis'], ENT_QUOTES);
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
    	$veza->exec("set names utf8");
   	$dodavanje=$veza->prepare('INSERT INTO novosti(Naslov,Tekst,DetaljnijiTekst,Autor,Slika,Datum)VALUES(:naslov,:tekst,:detaljnijitekst,:autor,:slika,:datum)');
   	$dodavanje->bindParam(":naslov",$naslov);	
   	$dodavanje->bindParam(":tekst",$tekst);
   	$dodavanje->bindParam(":detaljnijitekst",$detTekst);
   	$dodavanje->bindParam(":autor",$autor);
   	$dodavanje->bindParam(":slika",$slika);
  	$dodavanje->bindParam(":datum",$date);
   	
   	$dodavanje->execute();
   echo "Uspješno ste dodali novost!";



?>