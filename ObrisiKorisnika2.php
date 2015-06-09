<?php
    session_start();
    $trenutniKorisnik=$_SESSION['username'];
	$id=$_GET['Username'];

	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");

     $rezultat = $veza->query("select username from korisnici");
     if (!$rezultat) {}
     	
     $veza->exec("delete from korisnici where username='".$id."'");
     echo 'Uspješno ste obrisali korisnika!';
 
?>