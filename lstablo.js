function Funkcija1()
{
	document.getElementById("Podlista2").style.display="none";
	document.getElementById("Podlista3").style.display="none";
	document.getElementById("Podlista4").style.display="none";
	document.getElementById("Podlista5").style.display="none";
}

function Education_klik()
{
	if(document.getElementById("Podlista2").style.display=="block")
   		{
   			document.getElementById("Podlista2").style.display="none";
   			document.getElementById("slicica6").src="menu_desno.png";
			
      	}
    else
   		{
            document.getElementById("Podlista2").style.display="block";
            document.getElementById("slicica6").src="menu_dolje.png";
            document.getElementById("Podlista3").style.display="none";
            document.getElementById("Podlista4").style.display="none";
            document.getElementById("Podlista5").style.display="none";
            document.getElementById("slicica7").src="menu_desno.png";
            document.getElementById("slicica8").src="menu_desno.png";
            document.getElementById("slicica9").src="menu_desno.png";
      	}
}
function Wishes_klik()
{
	if(document.getElementById("Podlista3").style.display=="block")
   		{
   			document.getElementById("Podlista3").style.display="none";
   			document.getElementById("slicica7").src="menu_desno.png";
      	}
    else
   		{

            document.getElementById("Podlista3").style.display="block";
            document.getElementById("slicica7").src="menu_dolje.png";   			
            document.getElementById("Podlista2").style.display="none";
            document.getElementById("Podlista4").style.display="none";
            document.getElementById("Podlista5").style.display="none";
            document.getElementById("slicica6").src="menu_desno.png";
            document.getElementById("slicica8").src="menu_desno.png";
            document.getElementById("slicica9").src="menu_desno.png";
      	}
}
function Sport_klik()
{
	if(document.getElementById("Podlista4").style.display=="block")
   		{
   			document.getElementById("Podlista4").style.display="none";
   			document.getElementById("slicica8").src="menu_desno.png";
	      	}
    else
   		{
            document.getElementById("Podlista4").style.display="block";
            document.getElementById("slicica8").src="menu_dolje.png";
            document.getElementById("Podlista2").style.display="none";
            document.getElementById("Podlista3").style.display="none";
            document.getElementById("Podlista5").style.display="none";
            document.getElementById("slicica6").src="menu_desno.png";
            document.getElementById("slicica7").src="menu_desno.png";
            document.getElementById("slicica9").src="menu_desno.png";
         
         

      	}
}
function Medical_klik()
{
		if(document.getElementById("Podlista5").style.display=="block")
   		{
   			document.getElementById("Podlista5").style.display="none";
   			document.getElementById("slicica9").src="menu_desno.png";
      	}
    else
   		{
            document.getElementById("Podlista5").style.display="block";
            document.getElementById("slicica9").src="menu_dolje.png";
            document.getElementById("Podlista2").style.display="none";
            document.getElementById("Podlista3").style.display="none";
            document.getElementById("Podlista4").style.display="none";
            document.getElementById("Podlista1").style.display="none";
            document.getElementById("slicica6").src="menu_desno.png";
            document.getElementById("slicica7").src="menu_desno.png";
            document.getElementById("slicica8").src="menu_desno.png";
      	}
}