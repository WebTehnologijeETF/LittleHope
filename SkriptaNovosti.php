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
						if($DetaljnijiOpis=='')$DetaljnijiOpis1='';
						else $DetaljnijiOpis1='<a class="Opsirnije" onClick="UcitajDetaljnije()" >Opsirnije...</a>';
						

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
								<div class="Autor"><br>'.$Autor.','.$Datum.'</div>'
								.$DetaljnijiOpis1.
								'</li>
						 ';
				
				//echo $prikaz_novosti;
				/*if (!feof($handle)) {
				echo "Error: unexpected fgets() fail\n";
				}*/
				
				
			}fclose($handle);
}
?>