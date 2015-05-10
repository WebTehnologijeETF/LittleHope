<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tutorijal 6 Zadatak 1, Uvod</title>
  </head>
  <body>
    <form action="z1.php" method="get">
      <p>Broj1:<br /><input type="text" name="broj1" value="<?php print $_REQUEST['broj1']; ?>"> </p>
      <p>Broj2:<br /><input type="text" name="broj2" value="<?php print $_REQUEST['broj2']; ?>"> </p>
      <input type="submit" value="Pošalji">
      <?php
       $t1=$_GET['broj1'];
       $t2=$_GET['broj2'];
       $t3=$t1+$t2;
       if(2==3) echo "<p> Zbir je: $t3 </p>";
    ?>
    </form>
  </body>
</html>