<?php
	$id=$_GET['Id'];
	$naslov=$_GET['Naslov'];
	$autor=$_GET['Autor'];
	$slika=$_GET['Slika'];
	$tekst=$_GET['Opis'];
	$detTekst=$_GET['DetaljnijiOpis'];
	$naslov = htmlEntities($_GET['Naslov'], ENT_QUOTES);
	$autor = htmlEntities($_GET['Autor'], ENT_QUOTES);
	$slika= htmlEntities($_GET['Slika'], ENT_QUOTES);
	$tekst = htmlEntities($_GET['DetaljnijiOpis'], ENT_QUOTES);
	$detTekst = htmlEntities($_GET['Naslov'], ENT_QUOTES);
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->prepare("update novosti set autor='".$autor."', naslov='".$naslov."', slika='".$slika."', tekst='".$tekst."', detaljnijitekst='".$detTekst."' where id='".$id."'");
		    $rezultat->execute();

?>