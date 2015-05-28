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
    print '<div> <a id="odjava" onClick="DodajNovost()" > DODAJ NOVOST &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br></div>';
	
     $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->query("select id, Naslov, Tekst, Autor,DetaljnijiTekst,Slika, Datum from novosti");
     if (!$rezultat) {
                /*$greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();*/
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

      if($vijest['DetaljnijiTekst']=='')$DetaljnijiOpis1='';
      else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije('."'$datum'".','."'$autor'".','."'$naslov'".','."'$slika1'".','."'$tekst1'".','."'$detTekst'".')" >Opsirnije...</a>';

      $id=$vijest["id"];

      //iscitavanje broja komentara vezanih za novost
       $komentarii = $veza->query('select id from komentari where novost='."'$id'".'');
     if (!$rezultat) {
                /*$greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();*/
           echo "greskica";
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
                <div class="Autor"><br>'.$vijest['Autor'].','.$vijest['Datum'].'</div><br><br><a onClick="UrediNovost('."'$id'".')">Uredi</a> &nbsp;&nbsp;&nbsp;&nbsp;<a onClick="ObrisiNovost('."'$id'".')"> Obrisi </a></li>
                ';
     }

     echo '<div id="Novosti">';
     echo $prikaz_novosti;
     echo '</div>';
    ?>
  </body>
</html>