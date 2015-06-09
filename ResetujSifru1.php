<?php
	
	$name=$_GET['Name'];
$bool=0;
			 $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
      $admini = $veza->query('select username,email,password from korisnici');
     if (!$admini) { echo "greska!";}
     foreach ($admini as $admin) {

     	if($name==$admin['username']){

     			$bool=1;
     			ini_set("SMTP", "webmail.etf.unsa.ba");
				ini_set("sendmail_from", "ekusndzij1@etf.unsa.ba");
				ini_set("smtp_port", "25");

				$to = $admin['email'];
				$headers="From: ekusundzij1@etf.unsa.ba";
				$subject ="Reset_Sifre";
				$date=time();
				$message = "Ako zelite resetovati password kliknite na sljedeci link: <a href='http://littlehope-ekusundzija.rhcloud.com/sifra1.php?Name=".$name."&Vrijeme=".$date."'>link za promjenu sifre</a>";

				if(mail($to,$subject,$message,$headers))
				{
				echo "Provjerite mail!";
				}
				else
				{
				echo " Greska! ";
				}
     	}
     	
     }
     if($bool==0){
     		echo "Nepostojeci admin!";
     	}



?>