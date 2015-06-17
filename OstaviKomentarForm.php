<form class="forma"   ><!--"onsubmit="--> 
            
            <br><input type="text" name="name" id="name<?php  $id=$_GET['Id'];  print $id; ?>"  placeholder="Username"/>
                <label for="name">Name</label><br><br>

            <input type="email" name="email" id="email<?php  $id=$_GET['Id'];  print $id; ?>" placeholder="mail@example.com"/>
                <label  for="email">Email </label> <img id="email-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto"> <div id="error_email"></div>

        <br>
            <textarea id="text<?php  $id=$_GET['Id'];  print $id; ?>" name="text" placeholder="Comment" ></textarea><img id="text-slika" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/24/exclamation-icon.png" alt="nesto">  <div id="error_text"></div>            
            <br><input type="button" value="Send" onclick=<?php  $id=$_GET['Id'];  print 'OstaviKomentar2('."'$id'".')'  ?>  /></p>


            <div id="error"></div>
            </form>