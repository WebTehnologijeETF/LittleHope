<?php
	
	$prikaz_forme='';
	$emailRegex='/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
	$telRegex='/^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/';  
	$lemail=0;
	$ltel=0;
	$lweb=0;
	$ltext=0;
	$lsex=0;
	$eemail="Please enter e-mail address!";
	$etext="Please enter your message!";
	$edva="Please enter web or tel, if you choose to enter both, they have to be in right format - tel : 10 digits";

      if (isset($_GET['email']) && preg_replace('/\s+/', '', $_GET['email'])!=='' ) {
        $email = htmlEntities($_GET['email'], ENT_QUOTES);
        if(preg_match($emailRegex, $email)){//ok moze proc 
        	$lemail=1;
        	$eemail="";
        }
       
      }  

      if (isset($_GET['tel']) && preg_replace('/\s+/', '', $_GET['tel'])!=='') {
        $tel = htmlEntities($_GET['tel'], ENT_QUOTES);
        $ltel=2;

        if(preg_match($telRegex, $tel)){//ok moze proc 
        	$ltel=1;
        }
        
      }  

      if (isset($_GET['web']) && preg_replace('/\s+/', '', $_GET['web'])!=='' ) {
        $web = htmlEntities($_GET['web'], ENT_QUOTES);
        $lweb=1;
      }  


      if (isset($_GET['text']) && preg_replace('/\s+/', '', $_GET['text'])!=='' ) {
        $text = htmlEntities($_GET['text'], ENT_QUOTES);
        $ltext=1;
        $etext="";
      } 

      /*if (isset($_GET['sex']) && ($_GET['sex']=="male"  || $_GET['sex']=="female") {
        $sex = htmlEntities($_GET['sex'], ENT_QUOTES);
        $lsex=1;
      } 
*/    $sex = htmlEntities($_GET['sex'], ENT_QUOTES);
     
		if($ltext==1  && $lemail==1 && (($lweb==1 && $ltel==0)||($lweb==0 && $ltel==1)||($lweb==1 && $ltel==1)))
		{
			$edva="";
			$prikaz_forme='OK_form.php';
		}
		else{
			$prikaz_forme='NOTOK_form.php';
		}


?>
