function Funkcija()
{
	document.getElementById("Podlista1").style.display="none";
	document.getElementById("Podlista2").style.display="none";
	document.getElementById("Podlista3").style.display="none";
	document.getElementById("Podlista4").style.display="none";
	document.getElementById("Podlista5").style.display="none";
	document.getElementById("Podpodlista1").style.display="none";
	document.getElementById("Podpodlista2").style.display="none";
	document.getElementById("Podpodlista3").style.display="none";
	document.getElementById("Podpodlista4").style.display="none";
	document.getElementById("Podpodlista5").style.display="none";
}
function Countries_klik()
{
	

	if(document.getElementById("Podlista1").style.display=="block")
   		{
   		document.getElementById("Podlista1").style.display="none";
   		document.getElementById("slicica").src="menu_desno.png";
      	}
    else
   		{
         document.getElementById("Podlista1").style.display="block";
         document.getElementById("slicica").src="menu_dolje.png";
         document.getElementById("Podlista2").style.display="none";
         document.getElementById("Podlista3").style.display="none";
         document.getElementById("Podlista4").style.display="none";
         document.getElementById("Podlista5").style.display="none";
         document.getElementById("slicica6").src="menu_desno.png";
         document.getElementById("slicica7").src="menu_desno.png";
         document.getElementById("slicica8").src="menu_desno.png";
         document.getElementById("slicica9").src="menu_desno.png";
      	}
      	document.getElementById("Podpodlista1").style.display="none";
		document.getElementById("Podpodlista2").style.display="none";
		document.getElementById("Podpodlista3").style.display="none";
		document.getElementById("Podpodlista4").style.display="none";
		document.getElementById("Podpodlista5").style.display="none";
		
		
}
function Asia_klik()
{
	if(document.getElementById("Podpodlista1").style.display=="block")
   		{
   			document.getElementById("Podpodlista1").style.display="none";
   			document.getElementById("slicica1").src="menu_desno.png";
      	}
    else
   		{
   			document.getElementById("Podpodlista1").style.display="block";
   			document.getElementById("slicica1").src="menu_dolje.png";
   			document.getElementById("Podpodlista2").style.display="none";
   			document.getElementById("Podpodlista3").style.display="none";
   			document.getElementById("Podpodlista4").style.display="none";
   			document.getElementById("Podpodlista5").style.display="none";
            document.getElementById("slicica2").src="menu_desno.png";
            document.getElementById("slicica3").src="menu_desno.png";
            document.getElementById("slicica4").src="menu_desno.png";
            document.getElementById("slicica5").src="menu_desno.png";

      	}
}
function Africa_klik()
{
	if(document.getElementById("Podpodlista2").style.display=="block")
   		{
   			document.getElementById("Podpodlista2").style.display="none";
   			document.getElementById("slicica2").src="menu_desno.png";
      	}
    else
   		{
   			document.getElementById("Podpodlista2").style.display="block";
   			document.getElementById("slicica2").src="menu_dolje.png";
   			document.getElementById("Podpodlista1").style.display="none";
   			document.getElementById("Podpodlista3").style.display="none";
   			document.getElementById("Podpodlista4").style.display="none";
   			document.getElementById("Podpodlista5").style.display="none";
            document.getElementById("slicica1").src="menu_desno.png";
            document.getElementById("slicica3").src="menu_desno.png";
            document.getElementById("slicica4").src="menu_desno.png";
            document.getElementById("slicica5").src="menu_desno.png";
      	}
}
function Europe_klik()
{
	if(document.getElementById("Podpodlista3").style.display=="block")
   		{
   			document.getElementById("Podpodlista3").style.display="none";
   			document.getElementById("slicica3").src="menu_desno.png";
      	}
    else
   		{
   			document.getElementById("Podpodlista3").style.display="block";
   			document.getElementById("slicica3").src="menu_dolje.png";
   			document.getElementById("Podpodlista2").style.display="none";
   			document.getElementById("Podpodlista1").style.display="none";
   			document.getElementById("Podpodlista4").style.display="none";
   			document.getElementById("Podpodlista5").style.display="none";
            document.getElementById("slicica2").src="menu_desno.png";
            document.getElementById("slicica1").src="menu_desno.png";
            document.getElementById("slicica4").src="menu_desno.png";
            document.getElementById("slicica5").src="menu_desno.png";
      	}
}
function North_America_klik()
{
		if(document.getElementById("Podpodlista4").style.display=="block")
   		{
   			document.getElementById("Podpodlista4").style.display="none";
   			document.getElementById("slicica4").src="menu_desno.png";
      	}
    else
   		{
   			document.getElementById("Podpodlista4").style.display="block";
   			document.getElementById("slicica4").src="menu_dolje.png";
   			document.getElementById("Podpodlista2").style.display="none";
   			document.getElementById("Podpodlista3").style.display="none";
   			document.getElementById("Podpodlista1").style.display="none";
   			document.getElementById("Podpodlista5").style.display="none";
            document.getElementById("slicica2").src="menu_desno.png";
            document.getElementById("slicica3").src="menu_desno.png";
            document.getElementById("slicica1").src="menu_desno.png";
            document.getElementById("slicica5").src="menu_desno.png";
      	}
}
function South_America_klik()
{
	if(document.getElementById("Podpodlista5").style.display=="block")
   		{
   			document.getElementById("Podpodlista5").style.display="none";
   			document.getElementById("slicica5").src="menu_desno.png";
      	}
    else
   		{
   			document.getElementById("Podpodlista5").style.display="block";
   			document.getElementById("slicica5").src="menu_dolje.png";
   			document.getElementById("Podpodlista2").style.display="none";
   			document.getElementById("Podpodlista3").style.display="none";
   			document.getElementById("Podpodlista4").style.display="none";
   			document.getElementById("Podpodlista1").style.display="none";
            document.getElementById("slicica2").src="menu_desno.png";
            document.getElementById("slicica3").src="menu_desno.png";
            document.getElementById("slicica4").src="menu_desno.png";
            document.getElementById("slicica1").src="menu_desno.png";
      	}
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
            document.getElementById("Podlista1").style.display="none";
            document.getElementById("Podlista3").style.display="none";
            document.getElementById("Podlista4").style.display="none";
            document.getElementById("Podlista5").style.display="none";

            document.getElementById("slicica").src="menu_desno.png";
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
            document.getElementById("Podlista1").style.display="none";
            document.getElementById("Podlista4").style.display="none";
            document.getElementById("Podlista5").style.display="none";
            document.getElementById("slicica6").src="menu_desno.png";
            document.getElementById("slicica").src="menu_desno.png";
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
            document.getElementById("Podlista1").style.display="none";
            document.getElementById("Podlista5").style.display="none";
            document.getElementById("slicica6").src="menu_desno.png";
            document.getElementById("slicica7").src="menu_desno.png";
            document.getElementById("slicica").src="menu_desno.png";
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
            document.getElementById("slicica").src="menu_desno.png";
      	}
}