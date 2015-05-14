<link rel="stylesheet" type="text/css" href="LittleHope_stil.css">
<?php
header('Content-Type: text/html; charset=utf-8');
$prikaz_novosti='';

//sortiranje 
$fajlovi1=glob("Novosti/*.txt");
$fajlovi=array();
$datumi=array();
foreach ($fajlovi1 as $key) {
	array_push($fajlovi, $key);
	$handle = fopen($key, "r");
	if ($handle) 
			{
				$buffer = fgets($handle, 1024);
				$date = date_parse_from_format("d.m.Y. h:m:s", $buffer);
				$time = mktime($date['hour'], $date['minute'], $date['second'], $date['month'], $date['day'], $date['year']);
				$time = date('d.m.Y. h:m:s', $time);
			}
	fclose($handle);
	array_push($datumi, $time);

}
array_multisort($datumi,SORT_DESC,$fajlovi);

//ispis

foreach ($fajlovi as $file) 
{
	$handle = fopen($file, "r");
	if ($handle) 
			{
				$brojac=0;
				$Opis="";
				while (($buffer = fgets($handle, 1024)) !== false) 
				{
					if($brojac==0)
					{
						$Datum =$buffer;
						$date = date_parse_from_format("d.m.Y. h:m:s", $buffer);
						$time = mktime($date['hour'], $date['minute'], $date['second'], $date['month'], $date['day'], $date['year']);
						$time = date('d.m.Y. h:m:s', $time);
					}
					if($brojac==1)
					{
						$Autor =$buffer;
					}
					if($brojac==2)
					{
						$Naslov =$buffer;
					}
					if($brojac==3)
					{
						$Slika='';
						if(trim($buffer)=='')$Slika="";
						else $Slika ='<img  src='.$buffer.'alt="nesto">';
						$Slika1=trim($buffer);
					}
					if($brojac>3 and trim($buffer) != "--")
					{
						$Opis =$Opis.$buffer;
					}
					
					if (trim($buffer) == "--")
					{
						$DetaljnijiOpis='';
						while (($buffer = fgets($handle, 1024)) !== false) 
						{
							$DetaljnijiOpis=$DetaljnijiOpis.$buffer;
						}
						$DdetaljnijiOpis1='';
						 $Naslovx ="'" . str_replace( "\r\n", '<br />', $Naslov )."'";
						 $Datumx ="'" . str_replace( "\r\n", '<br />', $Datum )."'";
						 $Autorx ="'" . str_replace( "\r\n", '<br />', $Autor)."'";
						 $Slikax="'" . str_replace( "\r\n", '<br />', $Slika1 )."'";
						 $Opisx ="'" . str_replace( "\r\n", '<br />', $Opis)."'";
						 $DetaljnijiOpisx ="'" . str_replace( "\r\n", '<br />', $DetaljnijiOpis )."'";

						
						
						if($DetaljnijiOpis=='')$DetaljnijiOpis1='';
						else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije('.$Datumx.','.$Autorx.','.$Naslovx.','.$Slikax.','.$Opisx.','.$DetaljnijiOpisx.'); return;" >Opsirnije...</a>';
						
						break;
					}
				$brojac=$brojac + 1;
				}
				 $prikaz_novosti=$prikaz_novosti.'
				 				<li class="novosti_lista">
								<a class="a_novosti" >'
								.$Slika. '
								<br> '.ucfirst( strtolower($Naslov)).'<br></a>
								<div class="Opis"><br>'. $Opis.'</div>
								<div class="Autor"><br>'.$Autor.','.$Datum.'</div>'.$DetaljnijiOpis1.'</li>';
				
			}fclose($handle);
}
?>