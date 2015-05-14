<link rel="stylesheet" type="text/css" href="LittleHope_stil.css">
<?php
$prikaz_novosti='';
foreach (glob("Novosti/*.txt") as $file) 
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

						
						//else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije()" >Opsirnije...</a>';
						if($DetaljnijiOpis=='')$DetaljnijiOpis1='';
						else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije('.$Datumx.','.$Autorx.','.$Naslovx.','.$Slikax.','.$Opisx.','.$DetaljnijiOpisx.')" >Opsirnije...</a>';
						//echo $DetaljnijiOpis1;
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
				
				//echo $prikaz_novosti;
				/*if (!feof($handle)) {
				echo "Error: unexpected fgets() fail\n";
				}*/
				
				
			}fclose($handle);
}
?>