<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tutorijal 6, Uvod</title>
  </head>
  <body>
    <?php
     if (isset($_REQUEST['vrijednost']) && preg_replace('/\s+/', '', $_REQUEST['vrijednost'])!=='' ) {
        $a = htmlEntities($_GET['vrijednost'], ENT_QUOTES);
        if(preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $a))
        {print "<p>Poslali ste: " .$a."</p>";
    }
      } 
    ?>
    <form action="t6.php" method="get">
      <p>Vrijednost:<br /><input type="text" name="vrijednost" value="<?php print htmlEntities($_GET['vrijednost'], ENT_QUOTES); ?>"> </p>
      <input type="submit" value="Pošalji">
    </form>
  </body>
</html>
