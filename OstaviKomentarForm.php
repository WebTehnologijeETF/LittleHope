
			<form class="forma"   ><!--"onsubmit="--> 
			
			<p class="name"><input type="text" name="name" id="name" placeholder="Imenko Prezimenko"/>
				<label for="name">Name</label>

			<p class="email" id="emailcic"><input type="email" name="email" id="email" placeholder="mail@example.com"/>
				<label  for="email">Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>

		
			<p class="text"><textarea id="text" name="text" placeholder="Komentar" ></textarea><img id="text-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto">  <div id="error_text"></div>			
			<p class="submit"><input type="button" value="Posalji" onclick=<?php  $id=$_GET['Id'];  print 'OstaviKomentar2('."'$id'".')'  ?>  /></p>


			<div id="error"></div>
			</form>