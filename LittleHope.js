function Prikazi_error(tekst)
{
	document.getElementById("error").innerHTML=tekst;
}
function AboutUs() {
	var ajax = new XMLHttpRequest();	
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("DinamickiDio").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("DinamickiDio").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "AboutUs.html", true);
	ajax.send();
}
function GetInvolved() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("DinamickiDio").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("DinamickiDio").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Get_involved.html", true);
	ajax.send();
}
function GetInvolved1() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("DinamickiDio").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("DinamickiDio").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Get_involved1.html", true);
	ajax.send();
}
function GetInvolved2() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("DinamickiDio").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("DinamickiDio").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Get_involved2.html", true);
	ajax.send();
}
function SuccessStories() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("DinamickiDio").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("DinamickiDio").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Success_stories.html", true);
	ajax.send();
}
function ContactForm() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("DinamickiDio").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("DinamickiDio").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Contact_form.html", true);
	ajax.send();
}
function Animals() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Animals.html", true);
	ajax.send();
}
function Charity() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Charity.html", true);
	ajax.send();
}
function EducationCompetitions() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Education_competitions.html", true);
	ajax.send();
}
function EducationScolarship() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Education_scolarship.html", true);
	ajax.send();
}
function MedicalSurgery() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Medical_Surgery.html", true);
	ajax.send();
}
function MedicalTreatment() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Medical_Treatment.html", true);
	ajax.send();
}
function SportCompetitions() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Sport_Competitions.html", true);
	ajax.send();
}
function SportTournaments() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Sport_Toournaments.html", true);
	ajax.send();
}
function WishesTravel() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Wishes_Travel.html", true);
	ajax.send();
}
function WishesFamily() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Wishes_Family.html", true);
	ajax.send();
}
function WishesCreative() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Wishes_Creative.html", true);
	ajax.send();
}
function WishesEvents() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Wishes_Events.html", true);
	ajax.send();
}
function Other() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Other.html", true);
	ajax.send();
}
function MostRecent() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "MostRecent.html", true);
	ajax.send();
}
function EducationCreative() {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("Naslov").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("Naslov").innerHTML = "Greska: nepoznat URL";
	};
	ajax.open("GET", "Education_creative.html", true);
	ajax.send();
}
function Validacija_forme()
{	
	
	var email=document.getElementById("email");
	var township=document.getElementById("township");
	var location=document.getElementById("location");
	var tekst=document.getElementById("text");
	var tel=document.getElementById("tel");
	var visemail=0;
	var vistel=0;
	var vistext=0;
	var visweb=0;
	var telRegex=/^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
	var visopcina=0;
	var ajax = new XMLHttpRequest();
	var township=document.getElementById("township").value;
	township = encodeURIComponent(township);
	var location=document.getElementById("location").value;
	location = encodeURIComponent(location);
	ajax.onreadystatechange = function() {// Anonimna funkcija

		if (ajax.readyState == 4 && ajax.status == 200)
			{
				var parseAjax=JSON.parse(ajax.responseText);
				if(parseAjax.greska=="Mjesto nije iz date općine" || parseAjax.greska=="Nepostojeće mjesto" || parseAjax.greska=="Nepostojeća općina")
				{
					document.getElementById("location-slika").style.visibility="visible";
					document.getElementById("error_location").innerHTML = parseAjax.greska;
					visopcina=1
				}
				else
				{
					document.getElementById("location-slika").style.visibility="hidden";
					document.getElementById("error_location").innerHTML ="";
					visopcina=0;
				}
				
			}
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("error_township").innerHTML = "Greska: nepoznat URL";
		
	};
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/mjesto_opcina.php?opcina="+township+"&mjesto="+location, true);
	ajax.send();

	if(email.value==""|| email.value==null)
	{
		document.getElementById("email-slika").style.visibility="visible";
		document.getElementById("error_email").innerHTML="Please enter e-mail address!";
		visemail=1;
	}
	else
	{
		document.getElementById("email-slika").style.visibility="hidden";
		document.getElementById("error_email").innerHTML="";
		visemail=0;
	}
	if(tel.value=="" || tel.value==null )
	{
		document.getElementById("tel-slika").style.visibility="visible";
		document.getElementById("error_tel").innerHTML="Please enter a 10 digit number!";
		vistel=1;
	}
	else if(!telRegex.test(document.getElementById('tel').value))
	{
		document.getElementById("tel-slika").style.visibility="visible";
		document.getElementById("error_tel").innerHTML="Please enter a 10 digit number in format '999-999-9999' or '9999999999'!";  
		vistel=1;
	}
	else
	{
		document.getElementById("tel-slika").style.visibility="hidden";
		document.getElementById("error_tel").innerHTML="";
		vistel=0;
	}
	if(web.value==""|| web.value==null)
	{
		document.getElementById("web-slika").style.visibility="visible";
		document.getElementById("error_tel").innerHTML="Please enter 10 digit number address or website!";
		visweb=1;
	}
	else
	{
		document.getElementById("web-slika").style.visibility="hidden";
		document.getElementById("error_tel").innerHTML="";
		visweb=0;
	}
	if(text.value=="" || text.value==null)
	{
		document.getElementById("text-slika").style.visibility="visible";
		document.getElementById("error_text").innerHTML="Please enter your message!";
		vistext=1;
	}
	else
	{
		document.getElementById("text-slika").style.visibility="hidden";
		document.getElementById("error_text").innerHTML="";
		vistext=0;
	}
	if (visweb==0 && vistel==1)
	{
		document.getElementById("tel-slika").style.visibility="hidden";
		document.getElementById("error_tel").innerHTML="";
		vistel=0;

	}
	else if(vistel==0 && visweb==1)
	{
		document.getElementById("web-slika").style.visibility="hidden";
		document.getElementById("error_tel").innerHTML="";
		visemail=0;
	}


	

 	if(vistext==0 && vistel==0 && visemail==0 && visopcina==0)
 	{
 		document.forms.submit();
		return true;
 	}
}