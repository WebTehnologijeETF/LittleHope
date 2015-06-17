<link rel="stylesheet" type="text/css" href="LittleHope_stil.css">
<?php
		
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->query("select id, naslov from novosti");

		print '<ul id="lista"> 
				<div> Select news with comments you want to delete: <br> <br> <br> </div><div id="skrol">';
  				
  				 foreach ($rezultat as $vijest) {
  				 	$id=$vijest['id'];
				echo '<li ><a class="li" onClick="OtvoriKomentare1('."'$id'".')">'.$vijest['naslov'].'<a></li>';


	  			  }
				  
				echo '</ul> </div>';


?>