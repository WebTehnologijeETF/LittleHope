<?php
	$id=$_GET['Id'];
	$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
    $veza->exec("set names utf8");
    $rezultat = $veza->query("select id, naslov, tekst, autor,detaljnijitekst,slika, datum from novosti");
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

      
			      ?>
			<div id="formica">
					<form class="forma" >

				<p class="text"><textarea id="autor" name="text" ><?php   print $autor  ?></textarea><div id="error_text"></div>	
				<label for="autor"> Autor </label>

				<p class="text"><textarea id="naslov" name="text" ><?php   print $naslov  ?></textarea><div id="error_text"></div>	
				<label for="naslov"> Naslov </label>

				<p class="text"><textarea id="tekst" name="text" ><?php   print $tekst1  ?></textarea><div id="error_text"></div>	
				<label for="text"> Tekst </label>	

				<p class="text"><textarea id="detText" name="text" ><?php   print $detTekst  ?></textarea><div id="error_text"></div>
				<label for="username"> Detaljniji tekst </label>

				<p class="text"><textarea id="slika" name="text" ><?php   print $slika1  ?></textarea><div id="error_text"></div>
				<label for="username"> Slika </label>


				<p class="submit"><input type="button"  onClick=<?php   print 'UnesiIzmjeneNovosti('."'$id'".')'  ?>  value="Promjeni" /></p>

			<div id="error"></div>
			</form></div>

			
<?php

			}

	}
?>