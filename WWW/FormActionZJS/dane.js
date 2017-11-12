
 function Wyslij()
 {
	 Sprawdz();
	 if(iloscdobrych=="1") return true;
	 else
	 return false;
 }
 iloscdobrych="0";

function Sprawdz()			
{
    iloscdobrych="1";

    var daneImie = document.getElementById('b1').value;	
    var imie = /^[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ]{2,}$/;				
    if(imie.test(daneImie)==true)
        document.getElementById('b1b').innerHTML = "OK";
    else {
        document.getElementById('b1b').innerHTML = "Błędne imię";
		iloscdobrych="0";
    }

    
    var daneNazwisko = document.getElementById('b2').value;	
    var nazwisko = /^[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ]{2,15}(|(\s|-)[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ]{2,15})$/g		
    if(nazwisko.test(daneNazwisko)==true)
        document.getElementById('b2b').innerHTML = "OK";
    else {
        document.getElementById('b2b').innerHTML = "Błędne nazwisko";
		iloscdobrych="0";
    }

   
    var daneUlica = document.getElementById('b3').value;	
    var ulica = /^[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ]{2,15}(|(\s|-)[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ1-9]{1,15})(|(\s|-)[1-9]{1,15})(|(\s|-)[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ1-9]{1,15})(|(\s|-)[1-9]{1,15})$/g				
    if(ulica.test(daneUlica)==true)
        document.getElementById('b3b').innerHTML = "OK";
    else 
	{
        document.getElementById('b3b').innerHTML = "Błędna ulica";
		iloscdobrych="0";
    }

    
    var daneNumerDomu = document.getElementById('b4').value;	
    var NumerDomu = /^[1-9]{1}[0-9]{0,3}[a-z]{0,2}$/;				
    if(NumerDomu.test(daneNumerDomu)==true)
        document.getElementById('b4b').innerHTML = "OK";
    else 
	{
        document.getElementById('b4b').innerHTML = "Błędny numer domu";
		iloscdobrych="0";
    }

    var daneNrMieszkania = document.getElementById('b5').value;	
    var NrMieszkania = /^[1-9]{1}[0-9]{0,3}$/;			
    if(NrMieszkania.test(daneNrMieszkania)==true)
        document.getElementById('b5b').innerHTML = "OK";
    else 
	{
        document.getElementById('b5b').innerHTML = "Błędny numer mieszkania";
		iloscdobrych="0";
    }

    var daneKodPocztowy = document.getElementById('b6').value;	
    var KodPocztowy = /^[0-9]{2}-[0-9]{3}$/;
    if(KodPocztowy.test(daneKodPocztowy)==true)
        document.getElementById('b6b').innerHTML = "OK";
    else 
	{
        document.getElementById('b6b').innerHTML = "Błędny kod pocztowy";
		iloscdobrych="0";
    }


    var daneMiasto = document.getElementById('b7').value;	
    var miasto = /^[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ]{2,}(|(\s|-)[a-zA-ZąĄćĆęĘńŃóÓśŚżŻźŹ1-9]{1,15})(|(\s|-)[1-9]{1,15})$/;				
    if(miasto.test(daneMiasto)==true)
        document.getElementById('b7b').innerHTML = "OK";
    else 
	{
        document.getElementById('b7b').innerHTML = "Błędne miasto";
		iloscdobrych="0";
    }
	
	
     var daneDataUrodzenia = document.getElementById('b8').value;	
    var DataUrodzenia = /^[0-3]{1}[0-9]{1}-[0-1]{1}[0-9]{1}-[1-9]{1}[1-9]{1}[1-9]{1}[1-9]{1}$/;			
    if(DataUrodzenia.test(daneDataUrodzenia)==true)
        document.getElementById('b8b').innerHTML = "OK";
    else 
	{
        document.getElementById('b8b').innerHTML = "Błędna data urodzenia";
		iloscdobrych="0";
    }

	
    var daneTelefon = document.getElementById('b9').value;	
    var telefon = /^[1-9]{1}[0-9]{8}$/;			
    if(telefon.test(daneTelefon)==true)
        document.getElementById('b9b').innerHTML = "OK";
    else 
	{
        document.getElementById('b9b').innerHTML = "Błędny numer telefonu"
		iloscdobrych="0";
    }
}