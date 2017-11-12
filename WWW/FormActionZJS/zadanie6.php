
<head>
   <title>Formularz</title>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
    <script src="dane.js" type="text/javascript"></script>
</head>

<body>
	<?php
		session_start();
		if($_SESSION["czyZalogowano"]!=true)
		{
			header("Location:http://www.goldynd.cba.pl/logowanie.html"); 
		}
	?>
	<form action="http://www.goldynd.cba.pl/wyloguj.php" method="post">
		<input type="submit" name="wyloguj" value="Wyloguj"/>
	</form>
<form action="www.onet.pl" method="get" onsubmit="return Wyslij()">
		<table width="100%">
			<tr>
				<td  align="center">
					<font size="7">Formularz </font>
				</td>
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj imię:</td>
				<td width="20%"> <input type="text" id="b1" value="" name="imie"/></td>	
				<td width="50%" align = "left"> <label id="b1b"></label> </td>
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj nazwisko:</td>
				<td width="20%"> <input type="text" id="b2" value="" name="nazwisko"/></td> 
				<td width="20%"> 
					<label id="b2b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj ulice:</td>
				<td width="20%"> 
					<input type="text" id="b3" value="" name="ulica"/>
				</td> 
				<td width="20%"> 
					<label id="b3b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj numer domu:</td>
				<td width="20%"> 
					<input type="text" id="b4" value="" name="nr_domu" size="5" maxlength="5"/>
				</td> 
				<td width="20%"> 
					<label id="b4b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj numer mieszkania:</td>
				<td width="20%"> 
					<input type="text" id="b5" value="" name="nr_mieszkania" size="4" maxlength="4"/>
				</td> 
				<td width="20%"> 
					<label id="b5b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj kod pocztowy:</td>
				<td width="20%"> 
					<input type="text" id="b6" value="" name="kod_pocztowy" size="6" maxlength="6"/>
				</td> 
				<td width="20%"> 
					<label id="b6b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj miasto:</td>
				<td width="20%"> 
					<input type="text" value="" id="b7" name="miasto"/>
				</td> 
				<td width="20%"> 
					<label id="b7b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj date urodzenia(dd-mm-rrrr):</td>
				<td width="20%"> 
					<input type="text" id="b8" value="" name="data_urodzenia" size="10" maxlength="10"/>
				</td> 
				<td width="20%"> 
					<label id="b8b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj numer telefonu:</td>
				<td width="20%"> 
					<input type="text" id="b9" value="" name="telefon" size="9" maxlength="9"/>
				</td> 
				<td width="20%"> 
					<label id="b9b"> </label> 
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Czy jestes studentem SGGW:</td>
				<td width="20%"> 
					TAK<input type="checkbox" name="student" value="Tak"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj płeć:</td>
				<td width="20%"> K<input type="radio" name="plec" value="k"/>
					M<input type="radio" name="plec" value="m"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Status małżeński:</td>
				<td width="20%"> 
					Wolny<input type="radio" name="stan_malzenski" value="wolny"/>
					Zajety<input type="radio" name="stan_malzenski" value="zajety"/>
					Rozwiedziony<input type="radio" name="stan_malzenski" value="rozwiedziony"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Wybierz wyksztalcenie:</td>
				<td width="20%"> 
					<select name="wyksztalcenie">
						<option>Podstawowe</option>
						<option>Gimnazjalne</option>
						<option>Zasadnicze zawodowe</option>
						<option>Średnie</option>
						<option>Wyższe</option>			
					</select>
				</td>	
			</tr>
			<tr>
				<td>
					<input type="button" name="przycisk1" value="Sprawdz Dane" onclick="Sprawdz();"/>
					<input type="submit" name="przycisk2" value="Wyslij!"/>
					<input type="button" name="przycisk3" value="Do widzenia!"/>
				</td>
			</tr>
		</table>
	</form>	
	<p>
		<a href="http://www.goldynd.cba.pl/index.php">Strona Główna</a>
	</p>
	<p>
		<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
		</a>
	</p>
</body>

