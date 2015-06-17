<?php
	$id=$_GET['Id'];
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
    $veza->exec("set names utf8");
    $rezultat = $veza->query("select id, naslov, tekst, autor,detaljnijitekst,slika, datum,kategorija from novosti");
		     if (!$rezultat) {}

	foreach ($rezultat as $vijest) {

			if($vijest['id']==$id){
           
			      $autor=$vijest["autor"];
			      $naslov=$vijest["naslov"];
			      $tekst1=$vijest["tekst"];
			      $tekst1 = str_replace( "\r\n", '<br />', $tekst1 );
			      $detTekst=$vijest["detaljnijitekst"];
			       $detTekst = str_replace( "\r\n", '<br />', $detTekst );
			      $slika1=$vijest['slika'];
			       $kategorija=$vijest['kategorija'];


      
			      ?>
			<div id="formica">
					<form class="forma" >

				<p class="text"><textarea id="autor" name="text" ><?php   print $autor  ?></textarea><div id="error_text"></div>	
				<label for="autor"> Author </label>

				<p class="text"><textarea id="naslov" name="text" ><?php   print $naslov  ?></textarea><div id="error_text"></div>	
				<label for="naslov"> Title </label>

				<p class="text"><textarea id="tekst" name="text" ><?php   print $tekst1  ?></textarea><div id="error_text"></div>	
				<label for="text"> Text </label>	

				<p class="text"><textarea id="detText" name="text" ><?php   print $detTekst  ?></textarea><div id="error_text"></div>
				<label for="username"> More text </label>

				<p class="text"><textarea id="slika" name="text" ><?php   print $slika1  ?></textarea><div id="error_text"></div>
				<label for="username"> Image </label>

				<p class="text"><textarea id="kategorija" name="text" ><?php   print $kategorija  ?></textarea><div id="error_text"></div>
				<label for="username"> Category </label>


				<p class="submit"><input type="button"  onClick=<?php   print 'UnesiIzmjeneNovosti('."'$id'".')'  ?>  value="Save" /></p>

			<div id="error"></div>
			</form></div>

			
<?php

			}

	}
?>