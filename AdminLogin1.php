<?php
	
session_start();

$bool=0;
 if (isset($_SESSION['username'])){
		//$username = $_SESSION['username'];
 		$username = $_SESSION['username'];
		$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
	     $veza->exec("set names utf8");
	     $rezultat = $veza->query("select username, password from administratori");
		     if (!$rezultat) {}
	
    		
    		 foreach ($rezultat as $admin) {
     		if($admin['username']==$username)
     		{
     			$bool=1;
     		}}


     		if($bool==1){
     			 include 'AdminPanel.php';
     		}
     		else if($bool==0){
     			echo "Ulogovani ste kao korisnik!";
     		}
     		else{
     			include 'AdminLogin.php';
     		}




		
		}
		else{ 
			include 'AdminLogin.php';
		}
	
?>