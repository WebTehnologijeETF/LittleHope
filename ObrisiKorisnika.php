<?php
    session_start();
    $trenutniKorisnik=$_SESSION['username'];
	$id=$_GET['Username'];

	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");

     $rezultat = $veza->query("select username from administratori");
     if (!$rezultat) {}
     	$brojac=0;
     	foreach ($rezultat as $admin) {$brojac=$brojac+1;}
     		if($brojac==1){ 
     			
     	echo "Nemoguce obrisati posljednjeg administratora!";
        
    }
    else if($trenutniKorisnik==$admin['username'])
    {
        echo "Nemoguce obrisati sam sebe, za vrijeme sesije!";
    }
    else{
     $veza->exec("delete from administratori where username='".$id."'");
     echo 'Uspješno ste obrisali administratora!';
 }
?>