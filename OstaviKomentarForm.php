<form class="forma"   ><!--"onsubmit="--> 
            
           <!-- <br><input type="text" name="name" id="name<?php  //$id=$_GET['Id'];  print $id; ?>"  placeholder="Imenko Prezimenko"/>
                <label for="name">Name</label><br><br>

            <input type="email" name="email" id="email<?php  //$id=$_GET['Id'];  print $id; ?>" placeholder="mail@example.com"/>
                <label  for="email">Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>
-->


        <br>
            <textarea id="text<?php  $id=$_GET['Id'];  print $id; ?>" name="text" placeholder="Komentar" ></textarea><img id="text-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto">  <div id="error_text"></div>            
            <br><input type="button" value="Ostavi komentar" onclick=<?php  
            session_start();
			$id=$_GET['Id'];
			 if (!isset($_SESSION['username'])){
				print 'OstaviKomentar2('."'$id'".',"anoniman","")';
				}
				else{   
					$username=$_SESSION['username'];
					 $veza = new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "Elma", "root");
					$veza->exec("set names utf8");
					$rezultat = $veza->query("select username, email from korisnici");
		     		if (!$rezultat) {}
					foreach ($rezultat as $admin) {
						$email;
						if($admin['username']==$username)
						{

							$email=$admin['email'];
						}
					}
					$rezultat2 = $veza->query("select username, email from administratori");
		     		if (!$rezultat2) {}
					foreach ($rezultat2 as $admin) {
						if($admin['username']==$username)
						{

							$email=$admin['email'];
						}
					}
            	  print 'OstaviKomentar2('."'$id'".','."'$username'".','."'$email'".')'; }?>  /></p>



            <div id="error"></div>
            </form>