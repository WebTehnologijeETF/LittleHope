<!DOCTYPE HTML>
<HTML>
<HEAD>
	<meta charset="utf-8" />
	<TITLE>LittleHope</TITLE>
	<script src="lstablo.js"></script>
	<script src="LittleHope.js"></script>
	<link rel="stylesheet" type="text/css" href="LittleHope_stil.css">
</HEAD>
		<div id="Naslov"><p>WISHES - CREATIVE</p></div>
		<div id="Novosti">
			
			<?php

			$prikaz_novosti='';
            $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
            $veza->exec("set names utf8");
            $rezultat = $veza->query("select id, Naslov, Tekst, Autor,DetaljnijiTekst,Slika, Datum from novosti where kategorija='wishes_creative'");
            if (!$rezultat) {
            }
            foreach ($rezultat as $vijest) {

            if(trim($vijest['Slika'])=='')$Slika='';
            else $Slika ='<img  src="'.$vijest['Slika'].'" alt="nesto">';

            $datum=$vijest["Datum"];
            $autor=$vijest["Autor"];
            $naslov=$vijest["Naslov"];
            $tekst1=$vijest["Tekst"];
            $tekst1 = str_replace( "\r\n", '<br />', $tekst1 );
            $detTekst=$vijest["DetaljnijiTekst"];
            $detTekst = str_replace( "\r\n", '<br />', $detTekst );
            $slika1=$vijest['Slika'];
            $id=$vijest["id"];
            if($vijest['DetaljnijiTekst']=='')$DetaljnijiOpis1='';
            else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije('."'$id'".','."'$datum'".','."'$autor'".','."'$naslov'".','."'$slika1'".','."'$tekst1'".','."'$detTekst'".')" >Read more...</a>';



            //iscitavanje broja komentara vezanih za novost
            $komentarii = $veza->query('select id from komentari where novost='."'$id'".'');
            if (!$rezultat) {
            }
            $brojKomentara=0;
            foreach ($komentarii as $komentar) {

            $brojKomentara=$brojKomentara+1;

            }
            //include 'OstaviKomentarForm.php';
            $prikaz_novosti=$prikaz_novosti.'
            <li class="novosti_lista">
            <a class="a_novosti" >'
            .$Slika. '
            <br> '.ucfirst( strtolower($vijest['Naslov'])).'<br></a>
            <div class="Opis"><br>'. $vijest['Tekst'].'</div>
            <div class="Autor"><br>'.$vijest['Autor'].','.$vijest['Datum'].'</div>'.$DetaljnijiOpis1.' <div> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="Opsirnije1"  onClick="ProcitajKomentare1('."'$id'".')"> '."$brojKomentara".' comments </a><div></li><li><div id="zaFormu'.$id.'"></div><div id="nekiId'.$id.'"></div><div id="refresh'.$id.'"></div></li>';
            }
            print '<ul>'.$prikaz_novosti.'</ul>';


?>
		</div>
