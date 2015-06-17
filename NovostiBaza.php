<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NOVOSTI</title>
  </head>
  <body>
    <h1>Novosti</h1>
    <?php
    $prikaz_novosti='';
     $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->query("select id, Naslov, Tekst, Autor,DetaljnijiTekst,Slika, Datum from novosti");
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
      else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije('."'$id'".','."'$datum'".','."'$autor'".','."'$naslov'".','."'$slika1'".','."'$tekst1'".','."'$detTekst'".')" >Opsirnije...</a>';

      

      //iscitavanje broja komentara vezanih za novost
       $komentarii = $veza->query('select id from komentari where novost='."'$id'".'');
     if (!$rezultat) {
     }
     $brojKomentara=0;
     foreach ($komentarii as $komentar) {

          $brojKomentara=$brojKomentara+1;

        }
      $prikaz_novosti=$prikaz_novosti.'
                <li class="novosti_lista">
                <a class="a_novosti" >'
                .$Slika. '
                <br> '.ucfirst( strtolower($vijest['Naslov'])).'<br></a>
                <div class="Opis"><br>'. $vijest['Tekst'].'</div>
                <div class="Autor"><br>'.$vijest['Autor'].','.$vijest['Datum'].'</div>'.$DetaljnijiOpis1.' <div> <br><a class="Opsirnije"  onClick="OstaviKomentar('."'$id'".')"> Ostavi Komentar </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="Opsirnije1"  onClick="ProcitajKomentare('."'$id'".')"> '."$brojKomentara".' komentara </a><div></li><li><div id="refresh'.$id.'"></div></li>';
     }
     print '<ul>'.$prikaz_novosti.'</ul>';
    ?>
  </body>
</html>