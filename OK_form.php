 
<div id="formica">
		<h1>Provjerite da li ste ispravno popunili kontakt formu</h1>
		<div id="Podaci">
		<p><?php print "Name:" .$_GET['name']; ?></p> 
		<p><?php print "Township:" .$_GET['township']; ?></p>
		<p><?php print "Location:" .$_GET['location']; ?></p>
		<p><?php print "Email:" .$email; ?></p>
		<p><?php print "Tel:" .$tel; ?></p>
		<p><?php print "Web:" .$web; ?></p>
		<p><?php print "Message:" .$text; ?></p>
		<h1>Da li ste sigurni da želite poslati ove podatke?</h1>
		
		<form class="forma" action=<?php print "Posalji_mail.php?name=".$_GET['name']."&email=".$email."&tel".$tel."&web".$web."&text".$text; ?> method="get" ><!--onsubmit="Validacija_forme(); return false;"--> 
		<p class="submit"><input type="submit" value="Sigurna sam" /></p>
		</form>
		<p><br><br><br></p>
		</div>
		<h1>Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke</h1>
		
		
			<form class="forma" action="Contact_form.php" method="get" ><!--onsubmit="Validacija_forme(); return false;"--> 
			<p class="name"><input type="text" name="name" id="name" placeholder="Imenko Prezimenko" value="<?php print $_REQUEST['name']; ?>"/>
				<label for="name">Name</label>

			<p class="township"><input type="text" name="township" id="township" placeholder="Ilidža" value="<?php print $_REQUEST['township']; ?>"/>
				<label for="township">Township</label><img id="township-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_township"></div> 

			<p class="location"><input type="text" name="location" id="location" placeholder="Ilidža" value="<?php print $_REQUEST['location']; ?>"/>
				<label for="location">Location</label><img id="location-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_location"></div>

			<p class="email" id="emailcic"><input type="email" name="email" id="email" placeholder="mail@example.com" value="<?php print $_REQUEST['email']; ?>" />
				<label  for="email">Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>

			<p class="tel" id="telefoncic"><input type="text" name="tel" id="tel" placeholder="999-999-9999" value="<?php print $_REQUEST['tel']; ?>"/>
				<label  for="email">Phone </label><img id="tel-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_tel"></div>
			
			<p class="web"><input type="text" name="web" id="web" placeholder="www.example.com" value="<?php print $_REQUEST['web']; ?>" />
				<label for="web">Website</label><img id="web-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"></p>		

				<p><input type="radio" name="sex" value="male" <?php if(isset($_REQUEST['sex'])&&$_REQUEST['sex']=="male") print "checked"; ?>>Not-Urgent 
					<input type="radio" name="sex" value="female" <?php if(isset($_REQUEST['sex'])&&$_REQUEST['sex']=="female") print "checked"; ?>>Urgent</p>
		
			<p class="text"><textarea id="text" name="text" placeholder="Message for us" ><?php print $_REQUEST['text']; ?></textarea><img id="text-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto">  <div id="error_text"></div>			
			<p class="submit"><input type="submit" value="Slanje" /></p>
			<p class="submit"><input type="submit" value="Reset" /></p>
			<div id="error"></div>
			</form>
	
		</div>

