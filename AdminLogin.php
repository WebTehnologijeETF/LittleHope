<!DOCTYPE HTML>
<HTML>
<HEAD>
	<meta charset="utf-8" />
	<TITLE>LittleHope</TITLE>
	<script src="lstablo.js"></script>
	<script src="LittleHope.js"></script>
	<link rel="stylesheet" type="text/css" href="LittleHope_stil.css">
	<link rel="stylesheet" type="text/css" href="LittleHope_stil1.css">
</HEAD>
<BODY onLoad="Funkcija()">
<div id="DinamickiDio"><div id="formica">
			<form class="forma" ><!--onsubmit="Validacija_forme(); return false;"--> 
			<br>
			<br>
			<br>
			<br>
			<h1>Unesi podatke</h1>
			<p class="name"><input type="text" name="username" id="name" placeholder="admin"/>
				<label for="username"> Username </label>

			
			<p class="email" ><input type="text" name="password" id="email" placeholder="password" />
				<label  for="password"> Password </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>
			
			<a onClick="ResetujSifru()"> Resetuj password </a>

			<p class="submit"><input type="button"  onClick="OtvoriAdminPanel()"  value="Send" /></p>

			<div id="error"></div>
			</form></div>

</div>
</BODY>
</HTML>