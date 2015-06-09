<?php
function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
}
function rest_get($request, $data) { 
    
            print '<h1>Novosti</h1>';

            $prikaz_novosti='';
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
            $id=$vijest["id"];
            if($vijest['DetaljnijiTekst']=='')$DetaljnijiOpis1='';
            else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije('."'$id'".','."'$datum'".','."'$autor'".','."'$naslov'".','."'$slika1'".','."'$tekst1'".','."'$detTekst'".')" >Opsirnije...</a>';



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
            //include 'OstaviKomentarForm.php';
            $prikaz_novosti=$prikaz_novosti.'
            <li class="novosti_lista">
            <a class="a_novosti" >'
            .$Slika. '
            <br> '.ucfirst( strtolower($vijest['Naslov'])).'<br></a>
            <div class="Opis"><br>'. $vijest['Tekst'].'</div>
            <div class="Autor"><br>'.$vijest['Autor'].','.$vijest['Datum'].'</div>'.$DetaljnijiOpis1.' <div> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="Opsirnije1"  onClick="ProcitajKomentare1('."'$id'".')"> '."$brojKomentara".' komentara </a><div></li><li><div id="zaFormu'.$id.'"></div><div id="nekiId'.$id.'"></div><div id="refresh'.$id.'"></div></li>';
            }
            print '<ul>'.$prikaz_novosti.'</ul>';
            
            //print $var;

  
 }
function rest_post($request, $data) { echo "post";}
function rest_delete($request) { echo "delete";}
function rest_put($request, $data) {echo "put"; }
function rest_error($request) {echo "error"; }

$method  = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];

switch($method) {
    case 'PUT':
        parse_str(file_get_contents('php://input'), $put_vars);
        zag(); $data = $put_vars; rest_put($request, $data); break;
    case 'POST':
        zag(); $data = $_POST; rest_post($request, $data); break;
    case 'GET':
        zag(); $data = $_GET; rest_get($request, $data); break;
    case 'DELETE':
        zag(); rest_delete($request); break;
    default:
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        rest_error($request); break;
}
?>