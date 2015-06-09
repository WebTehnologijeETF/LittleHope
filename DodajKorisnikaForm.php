<?php
?>
<div id="DinamickiDio"><div id="formica">
			<form class="forma" ><!--onsubmit="Validacija_forme(); return false;"--> 
			<br>
			<br>
			<br>
			<br>
			<h1>Unesi podatke</h1>
			<p class="name"><input type="text" name="username" id="name"  />
				<label for="username"> Username </label>

			
			<p class="email" ><input type="text" name="password" id="password" />
				<label  for="password"> Password </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>
			

			<p class="email" ><input type="text" name="password" id="email"  />
				<label  for="password"> Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>


			<p class="submit"><input type="button"  onClick="DodajKorisnika1()"  value="Send" /></p>
				
			<div id="error"></div>
			</form></div>

</div>



