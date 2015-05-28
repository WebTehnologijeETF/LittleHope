

<h1>Komentari</h1>

<?php
		$id=$_GET['Id'];

			 $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
      $komentarii = $veza->query('select Id,Datum,Autor,Email,Tekst from komentari where novost='."'$id'".' order by Datum desc');
     if (!$komentarii) { echo "greska!";}

    $prikazNovosti="";
     foreach ($komentarii as $komentar) {
     	if($komentar['Autor']=="")$Autor="Anonimni autor";
     		else $Autor=$komentar['Autor'];
        $prikazNovosti= $prikazNovosti.'<li class="novosti_lista">
        									<div class="Autor">'.$komentar['Datum'].',&nbsp;&nbsp;
        									'.$Autor.' ,&nbsp;&nbsp;
        									 <a href="mailto:'.$komentar['Email'].'">'.$komentar['Email'].'</a> <div>
        									------komentar------<br><div class="Autor">'.$komentar['Tekst'].'</div></li>
        									<a onClick="ObrisiKomentar('.$komentar['Id'].')">Obrisi</a>';

        }
         echo '<div id="Novosti">';
	     echo $prikazNovosti;
	     echo '</div>';

?>