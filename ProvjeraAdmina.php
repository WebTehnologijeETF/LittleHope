<link rel="stylesheet" type="text/css" href="LittleHope_stil1.css">
<?php

	 $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
    
     $bool=0;
    


      session_start();
     // $zatvoriSesiju=0;
	 if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		include 'AdminPanel.php';
		}
	 else if(isset($_GET['Name'])){
		$username = $_GET['Name'];
		$password=$_GET['Password'];


		$rezultat = $veza->query("select username, password from administratori");
		     if (!$rezultat) {}
	
     foreach ($rezultat as $admin) {

     		if($admin['username']==$username && $admin['password']==md5($password))
     		{
     			

     			$bool=1;
     			$_SESSION['username'] = $username;
     			 include 'AdminPanel.php';
     		}
               
               
                
     }
     if($bool==0)echo "Unesite ispravne podatke!";
     




	}
     
?>