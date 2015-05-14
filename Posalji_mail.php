<?php
/*<?php include 'OK_form.php'?>*/
ini_set("SMTP", "webmail.etf.unsa.ba");
ini_set("sendmail_from", "ekusndzij1@etf.unsa.ba");
ini_set("smtp_port", "25");

$to = "ekusundzij1@etf.unsa.ba";
//$headers="From:".$_GET['email']."\r\n"."Cc:"."iprazina1@etf.unsa.ba"."\r\n"."Replay-to:"."";
$headers="From: ekusundzij1@etf.unsa.ba \r\n Cc:"."iprazina1@etf.unsa.ba \r\n"."Replay-to: ".$_GET['email'];
$subject ="Customer feedback";
$message = "Name:".$_GET['name']." \r\n Tel: ".$_GET['tel']." \r\n Web: ".$_GET['web']." \r\n Poruka: ".$_GET['text'];

if(mail($to,$subject,$message,$headers))
{
	$prikaz_forme= "Zahvaljujemo se sto ste nas kontaktirali!";
}
else
{
	$prikaz_forme= " Mail nije poslan! ";
}

?>