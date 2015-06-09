<link rel="stylesheet" type="text/css" href="LittleHope_stil1.css">
<?php

	 $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
    
     $bool=0;
    


      session_start();
     // $zatvoriSesiju=0;
	 if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		//include 'index.php';

		$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
	     $veza->exec("set names utf8");
	     $rezultat = $veza->query("select username, password from korisnici");
		     if (!$rezultat) {}

		     	foreach ($rezultat as $admin) {
     		if($admin['username']==$username)
     		{
     			$bool=1;
     		}}
     
     		if($bool==0){
     			echo "Ulogovani ste kao admin!";
     		}
     		else{
					$username = $_GET['Name'];
					$password=$_GET['Password'];


					$rezultat = $veza->query("select username, password from korisnici");
					if (!$rezultat) {}

					foreach ($rezultat as $admin) {

					if($admin['username']==$username && $admin['password']==md5($password))
					{


					$bool=1;
					$_SESSION['username'] = $username;

					}



					}
					if($bool==0)echo "Unesite ispravne podatke!";
     		}



		}
	 else if(isset($_GET['Name'])){
		$username = $_GET['Name'];
		$password=$_GET['Password'];


		$rezultat = $veza->query("select username, password from korisnici");
		     if (!$rezultat) {}
	
     foreach ($rezultat as $admin) {

     		if($admin['username']==$username && $admin['password']==md5($password))
     		{
     			

     			$bool=1;
     			$_SESSION['username'] = $username;

}
               
               
                
     }
     if($bool==0)echo "Unesite ispravne podatke!";
     




	}
     
?>