<?php
	
	$name=$_GET['Name'];

			 $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
      $admini = $veza->query('select username,email,password from administratori');
     if (!$admini) { echo "greska!";}
     foreach ($admini as $admin) {

     	if($name==$admin['username']){



					
					$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
					$pass = array(); 
					$alphaLength = strlen($alphabet) - 1; 
					for ($i = 0; $i < 8; $i++) {
					$n = rand(0, $alphaLength);
					$pass[] = $alphabet[$n];
					}
					$novaSifra=implode($pass); 

					$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
				     $veza->exec("set names utf8");
				     $rezultat = $veza->prepare("update administratori set password='".md5($novaSifra)."'  where username='".$name."'");
						    $rezultat->execute();
									


     			ini_set("SMTP", "webmail.etf.unsa.ba");
				ini_set("sendmail_from", "ekusndzij1@etf.unsa.ba");
				ini_set("smtp_port", "25");

				$to = $admin['email'];
				$headers="From: ekusundzij1@etf.unsa.ba";
				$subject ="Reset_Sifre";
				$message = "Nova sifra je: ".$novaSifra."";

				if(mail($to,$subject,$message,$headers))
				{
				echo "Vasa sifra je promjenjena!";
				}
				else
				{
				echo " Greska! ";
				}
     	}
     	else{
     		echo "Nepostojeci admin!";
     	}
     }



?>