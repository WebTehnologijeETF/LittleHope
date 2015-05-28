<link rel="stylesheet" type="text/css" href="LittleHope_stil1.css">
<?php
	
    
	print ' <ul id="lista"> 
			<div> Administratori stranice: <br> <br> <br> </div> ';
			 print '<div> <a id="odjava" onClick="DodajAdmina()" > DODAJ ADMINISTRATORA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br></div>';


			$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
			$veza->exec("set names utf8");
			$rezultat = $veza->query("select username, email from administratori");
			if (!$rezultat) {}

				foreach ($rezultat as $admin) {
					$username=$admin['username'];
					 print '<li><a class="li">Username: '.$admin['username'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email:'.$admin['email'].'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onClick="UrediKorisnika('."'$username'".')"> Uredi </a>&nbsp;&nbsp; <a onClick="ObrisiKorisnika('."'$username'".')"> Obrisi </a></li>';
			}
			print '</ul> ';


?>