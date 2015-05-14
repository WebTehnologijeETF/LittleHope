<div id="formica">
				
		<h1>Required informations</h1>
		<form class="forma"  action="Contact_form.php" method="get" ><!--onsubmit="Validacija_forme(); return false;"--> 
			
			<p class="name"><input type="text" name="name" id="name" placeholder="Imenko Prezimenko"  value="<?php print $_REQUEST['name']; ?>"/>
				<label for="name">Name</label> 

			<p class="township"><input type="text" name="township" id="township" placeholder="Ilidža"  value="<?php print $_REQUEST['township']; ?>"/>
				<label for="township">Township</label><img id="township-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_township"></div> 

			<p class="location"><input type="text" name="location" id="location" placeholder="Ilidža"  value="<?php print $_REQUEST['location']; ?>"/>
				<label for="location">Location</label><img id="location-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_location"></div>

			<p class="email" id="emailcic"><input type="email" name="email" id="email" placeholder="mail@example.com"  value="<?php print $_REQUEST['email']; ?>"/>
				<label  for="email">Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"><?php if($lemail==0){ print '<img src="exclamation-icon.png" alt="nesto">'; print  $eemail;}  ?></div>

			<p class="tel" id="telefoncic"><input type="text" name="tel" id="tel" placeholder="999-999-9999"  value="<?php print $_REQUEST['tel']; ?>"/>
				<label  for="email">Phone </label><img id="tel-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_tel"><?php if(($ltel==2 && $lweb==1)||($ltel==2 && $lweb==1)||($ltel==0 && $lweb==0)){ print '<img src="exclamation-icon.png" alt="nesto">'; print  $edva;}  ?>
					
				</div>
			
			<p class="web"><input type="text" name="web" id="web" placeholder="www.example.com"  value="<?php print $_REQUEST['web']; ?>"/>
				<label for="web">Website</label><img id="web-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"></p>		

				<p><input type="radio" name="sex" value="male" <?php if(isset($_REQUEST['sex'])&&$_REQUEST['sex']=="male") print "checked"; ?> >Not-Urgent 
					<input type="radio" name="sex" value="female"  <?php if(isset($_REQUEST['sex'])&&$_REQUEST['sex']=="female") print "checked"; ?> >Urgent</p>
		
			<p class="text"><textarea id="text" name="text" placeholder="Message for us"><?php print $_GET['text']; ?></textarea><img id="text-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto">  <div id="error_text"><?php if($ltext==0){ print '<img src="exclamation-icon.png" alt="nesto">'; print  $etext; }?></div>			
			<p class="submit"><input type="submit" value="Send" /></p>

			<div id="error"></div>
			</form>
	
		</div>