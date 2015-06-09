<?php

	$id=$_GET['Id'];
	$username=$_GET['Username'];
	$password=$_GET['Password'];
	$email=$_GET['Email'];
	$id= htmlEntities($_GET['Id'], ENT_QUOTES);
	$username = htmlEntities($_GET['Username'], ENT_QUOTES);
	$password = htmlEntities($_GET['Password'], ENT_QUOTES);
	$email= htmlEntities($_GET['Email'], ENT_QUOTES);
	$bool=0;


	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");

     $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->query("select username,password,email from administratori");
     foreach ($rezultat as $admin) {
     		if($admin['username']==$username)
     		{
     			$bool=1;
     		}
}

     $rezultat2 = $veza->prepare("update korisnici set username='".$username."', password='".$password."', email='".$email."' where username='".$id."'");
		   if($bool==1){
		   		echo "Username vec postoji!";
		   }
		   else if($rezultat2->execute()){
		   			echo "Uspjesno ste promjenili korisnika!";
		   }
		   else {
		   	echo "Username mora biti jedinstven!";
		   }
?>