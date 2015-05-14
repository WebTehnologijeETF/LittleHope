<?php
/*<?php include 'OK_form.php'?>*/
ini_set("SMTP", "webmail.etf.unsa.ba");
ini_set("sendmail_from", "ekusndzij1@etf.unsa.ba");
ini_set("smtp_port", "25");

$to = "ekusundzij1@etf.unsa.ba";
//$headers="From:".$_GET['email']."\r\n"."Cc:"."iprazina1@etf.unsa.ba"."\r\n"."Replay-to:"."";
$headers="From:"."ekusndzij1@etf.unsa.ba";
$subject ="Customer feedback";
$message = "Poruka";

if(mail($to,$subject,$message,$headers))
{
	echo "Zahvaljujemo se sto ste nas kontaktirali!";
}
else
{
	echo "jedan".$email."bla";
}

?>