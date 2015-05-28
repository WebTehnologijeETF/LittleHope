<?php
		
		$veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
     $veza->exec("set names utf8");
     $rezultat = $veza->query("select username,password,email from administratori");
     if (!$rezultat) {}
     	foreach ($rezultat as $admin) {
     		if($admin['username']==$_GET['Username'])
     		{
     			?>

	



<div id="DinamickiDio"><div id="formica">
			<form class="forma" ><!--onsubmit="Validacija_forme(); return false;"--> 
			<br>
			<br>
			<br>
			<br>
			<h1>Unesi podatke</h1>
			<p class="name"><input type="text" name="username" id="name" value=<?php print $admin['username']?> />
				<label for="username"> Username </label>

			
			<p class="email" ><input type="text" name="password" id="password" value=<?php print $admin['password']?> />
				<label  for="password"> Password </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>
			

			<p class="email" ><input type="text" name="password" id="email" value=<?php print $admin['email']?> />
				<label  for="password"> Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>


			<?php $id=$admin['username'];
			echo '<p class="submit"><input type="button"  onClick="SpasiIzmjeneKorisnika('."'$id'".')"  value="Send" /></p>'
				?>
			<div id="error"></div>
			</form></div>

</div>
<?php

	
     		}
     	}
?>