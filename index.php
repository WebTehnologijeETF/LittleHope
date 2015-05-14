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
		<a class="Home" href="index.php">Home</a>
	</div>
	<div class="Login">
		<a class="Login" href="#">Login</a>
	</div>
	
	<div id="logotip">
		<a href="index.php">
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


		<div id="DinamickiDio">
		<div id="Kategorije" >
		<p>CATEGORIES</p>
			<ul id="Glavna_lista">

				<li class="saSlikom" id="Countries" onClick="Countries_klik()"><img id="slicica" src="menu_desno.png" alt="nesto"> Countries</li>
				<li><ul id="Podlista1">
					<li  id="Asia" class="saSlikom" onClick="Asia_klik()"><img id="slicica1" src="menu_desno.png" alt="nesto">Asia</li>
						<li><ul id="Podpodlista1">
							<li><a href="#"> Cambodia</a></li>
							<li><a href="#"> Iraq</a></li>
							<li><a href="#"> Lebanon</a></li>
							<li><a href="#"> Nepal</a></li>
							<li><a href="#"> Oman</a></li>
							<li><a href="#"> Syria</a></li>
							<li><a href="#"> Yemen</a></li>
						</ul></li>
					<li id="Africa"  class="saSlikom" onClick="Africa_klik()"><img id="slicica2" src="menu_desno.png" alt="nesto">Africa</li>
						<li><ul id="Podpodlista2">
							<li><a href="#"> Ethiopia</a></li>
							<li><a href="#"> Gambia</a></li>
							<li><a href="#"> Kenya</a></li>
							<li><a href="#"> Mali</a></li>
							<li><a href="#"> Senegal</a></li>
							<li><a href="#"> Sudan</a></li>
							<li><a href="#"> Zimbabwe</a></li>
						</ul></li>
					<li id="Europe"  class="saSlikom" onClick="Europe_klik()"><img id="slicica3" src="menu_desno.png" alt="nesto">Europe</li>
						<li><ul id="Podpodlista3">
							<li><a href="#"> Albania</a></li>
							<li><a href="#"> Armenia</a></li>
							<li><a href="#"> BiH</a></li>
							<li><a href="#"> Croatia</a></li>
							<li><a href="#"> Bulgaria</a></li>
							<li><a href="#"> Macedonia</a></li>
							<li><a href="#"> Slovenia</a></li>
						</ul></li>
					<li id="North_America" class="saSlikom" onClick="North_America_klik()"><img id="slicica4" src="menu_desno.png" alt="nesto">North America</li>
						<li><ul id="Podpodlista4">
							<li><a href="#"> Guatemala</a></li>
							<li><a href="#"> Honduras</a></li>
							<li><a href="#"> Jamaica</a></li>
							<li><a href="#"> Panama</a></li>
							<li><a href="#"> El Salvador</a></li>
							<li><a href="#"> Macedonia</a></li>
							<li><a href="#"> Nicaragua</a></li>
						</ul></li>
				    <li id="South_America" class="saSlikom" onClick="South_America_klik()"><img id="slicica5" src="menu_desno.png" alt="nesto">South America</li>
				    	<li><ul id="Podpodlista5">
							<li><a href="#"> Brasil</a></li>
							<li><a href="#"> Chile</a></li>
							<li><a href="#"> Ecuador</a></li>
							<li><a href="#"> Peru</a></li>
							<li><a href="#"> Venezuela</a></li>
						</ul></li>
					<li id="Australia"> <img id="slicica_prazna" src="menu_prazno.png" alt="nesto"><a href="#"> Australia</a></li>

					
				</ul></li>

				<li id="Education" class="saSlikom" onClick="Education_klik()" ><img id="slicica6" src="menu_desno.png" alt="nesto"> Education</li>
				<li><ul id="Podlista2">
					<li><a onclick="EducationCompetitions()"> Competitions</a></li>
					<li><a onclick="EducationCreative()"> Creative</a></li>
					<li><a onclick="EducationScolarship() "> Scolarship</a></li>
				</ul></li>

				<li id="Wishes" class="saSlikom" onClick="Wishes_klik()" ><img id="slicica7" src="menu_desno.png" alt="nesto"> Wishes</li>
				<li><ul id="Podlista3">
					<li><a onClick="WishesTravel()"> Travel</a></li>
					<li><a onClick="WishesFamily()"> Family</a></li>
					<li><a onClick="WishesEvents()"> Events</a></li>
					<li><a onClick="WishesCreative()"> Creative</a></li>
				</ul></li>

				<li id="Sport" class="saSlikom" onClick="Sport_klik()" ><img id="slicica8" src="menu_desno.png" alt="nesto"> Sport</li>
				<li><ul id="Podlista4">
					<li><a onclick="SportCompetitions()"> Competitions</a></li>
					<li><a onclick="SportTournaments()"> Tournaments</a></li>
				</ul></li>

				<li id="Medical" class="saSlikom" onClick="Medical_klik()" ><img id="slicica9" src="menu_desno.png" alt="nesto"> Medical</li>
				<li><ul id="Podlista5">
					<li><a onclick="MedicalSurgery()"> Surgery</a></li>
					<li><a onclick="MedicalTreatment()"> Treatment</a></li>
				</ul></li>

				<li id="MostRecent"> <img class="slicica_prazna" src="menu_prazno.png" alt="nesto"><a onclick="MostRecent()">  Most recent</a></li>

				<li id="Charity"><img class="slicica_prazna" src="menu_prazno.png" alt="nesto"><a onclick="Charity()">  Charity</a></li>

				<li id="Other"> <img class="slicica_prazna" src="menu_prazno.png" alt="nesto"><a onClick="Other()">  Other</a></li>

			</ul>
		</div>

		<div id="Naslov"><p>MOST RECENT</p>
		<?php
			 include 'SkriptaNovosti.php'
			 ?>
			
		<div id="Novosti">

				<ul>
				<?php 
				print $prikaz_novosti;
				?>
				</ul>
				
		</div>
			 
		</div>
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