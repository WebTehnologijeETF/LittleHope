<!DOCTYPE HTML>
<HTML>
<HEAD>
	<meta charset="utf-8" />
	<TITLE>LittleHope</TITLE>
	<script src="lstablo.js"></script>
	<script src="LittleHope.js"></script>
	<link rel="stylesheet" type="text/css" href="LittleHope_stil.css">
</HEAD>
<BODY onLoad="Funkcija()">
<div id="okvir" >
	<div class="contact_us">
		<a class="contact_us" onClick="ContactForm()">Contact us</a>
	</div>
	<div class="Home">
		<a class="Home" href="index.html">Home</a>
	</div>
	<div class="Login">
		<a class="Login" href="#">Login</a>
	</div>
	
	<div id="logotip">
		<a href="index.html">
		<img src="Logo_for_Charity_logo.png" alt="nesto"></a>
	</div>

	<div id="facebook">
		<a href="https://www.facebook.com/">
		<img src="http://icons.iconarchive.com/icons/hopstarter/social-networking/32/Facebook-icon.png" alt="nesto"></a>
	</div>
	<div id="twitter">
		<a href="https://twitter.com/">
		<img src="http://icons.iconarchive.com/icons/hopstarter/social-networking/32/Twitter-icon.png" alt="nesto"></a>
	</div>
	<div id="naslov_sa_strane">OTHER <br>SITES</div>
	<div id="unicef">
		<a href="http://www.unicef.org/">
		<img src="http://www.3plearning.com/wp-content/uploads/2013/06/logo_unicef2-300x279.jpg" alt="nesto"></a>
	</div>
	<div id="narodna_kuhinja">
		<a href="http://narodnakuhinja.org/">
		<img src="http://icons.iconarchive.com/icons/sirea/virtual-kitchen/48/Pot-icon.png" alt="nesto"></a>
	</div>
	<div id="otvorena_mreza">
		<a href="http://otvorenamreza.ba/">
		<img src="http://cdn-radiotime-logos.tunein.com/s194012q.png" alt="nesto"></a>
	</div>
	<div id="crveni_krst">
		<a href="http://www.ckfbih.ba/">
		<img src="https://pbs.twimg.com/profile_images/445505767773184000/4hkguKsH.jpeg" alt="nesto"></a>
	</div>

			<div id="naslov1"><p >do</p></div>
			<div id="naslov2"><p >ONE GOOD DEED</p></div>
			<div id="naslov3"><p >for someone other than<br>yourself </p></div>
		<div id="meni">
			<ul>
				<li class="meni_lista"> <a class="a_meni" onClick="AboutUs()">About us</a></li>
				<li class="meni_lista"><a class="a_meni" onClick="GetInvolved()">Get involved</a></li>
				<li class="meni_lista"><a class="a_meni" onClick="SuccessStories()">Stuff to buy</a></li>
			</ul>
		</div>
				<?php include 'Contact_form_validation.php'?>

		<div id="DinamickiDio">

				<?php 
				include $prikaz_forme;
				?>

		</div>

		<div id="Partneri">
			<p>PARTNERS</p>
			<ul id="lista_partnera">
				<li>
				<a class="a_par" href="#">
				<img src="http://icons.iconarchive.com/icons/hopstarter/orb/128/Mozilla-Firefox-icon.png" alt="nesto">
				</a> </li>

				<li>
				<a class="a_par" href="http://www.nytimes.com/">
				<img src="http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Web-The-New-York-Times-Metro-icon.png" alt="nesto">
				</a> </li>

				<li>
				<a class="a_par" href="http://rsg.ba/">
				<img src="https://lh4.ggpht.com/hQqAdW7kKk4i-kon77UHTDjH2Y6iaflAIWA2YxBiCmLocGJMkHvlZxIY2NbeXy_E7Jc=w300-rw" alt="nesto">
				</a> </li>

				<li>
				<a class="a_par" href="http://www.bhtelecom.ba/">
				<img src="http://49b5af5c747982f45fd7-dec8f175b0901987f30693abc46dc353.r35.cf2.rackcdn.com/icon/13/09/01/013ba5e4143086c64caeba839b82b7b2" alt="nesto">
				</a> </li>

				<li>
				<a class="a_par" href="http://www.mtel.ba/">
				<img src="http://upload.wikimedia.org/wikipedia/bs/e/e7/Mtel_logo.jpg" alt="nesto">
				</a> </li>

				<li>
				<a class="a_par" href="http://www.fds.ba/">
				<img src="http://www.djikic.com/uimages/fds.gif" alt="nesto">
				</a> </li>
			</ul>
		</div>



</div>
</BODY>
</HTML>