
<head>
   <title>Formularz</title>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
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
<form action="formularz.php" method="get">
		<table width="100%">
			<tr>
				<td align="center">
					<font size="7">Formularz </font>
				</td>
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj imię:</td>
				<td width="80%"> 
					<input type="text" name="imie"/>
				</td>	
			</tr>
			<tr>
				<td width = "20%" align="right"> Podaj nazwisko:</td>
				<td width="80%"> 
					<input type="text" name="nazwisko"/>
				</td>	
			</tr>
			<tr>
				<td width = "20%" align="right"> Podaj ulice:</td>
				<td width="80%"> 
					<input type="text"  name="ulica"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj numer domu:</td>
				<td width="80%"> 
					<input type="text"  name="nr_domu" size="5" maxlength="5"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj numer mieszkania:</td>
				<td width="80%"> 
					<input type="text"  name="nr_mieszkania" size="4" maxlength="4"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj kod pocztowy:</td>
				<td width="80%"> 
					<input type="text"  name="kod_pocztowy" size="6" maxlength="6"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj miasto:</td>
				<td width="80%"> 
					<input type="text"  name="miasto"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj date urodzenia:</td>
				<td width="80%"> 
					<input type="text" name="data_urodzenia" size="10" maxlength="10"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%" align="right"> Podaj numer telefonu:</td>
				<td width="80%"> 
					<input type="text"  name="telefon" size="9" maxlength="9"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%"align="right"> Czy jestes studentem SGGW:</td>
				<td width="80%"> TAK
					<input type="checkbox" name="student" value="Tak"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%"align="right"> Podaj płeć:</td>
				<td width="80%"> 
					K<input type="radio" name="plec" value="k"/>
					M<input type="radio" name="plec" value="m"/>
				</td>	
			</tr>
			<tr>	
				<td width = "20%"align="right"> Wybierz wyksztalcenie:</td>
				<td width="80%"> 
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
					<input type="button" name="przycisk1" value="Sprawdz Dane" />
					<input type="submit" name="przycisk2" value="Wyslij!"/>
					<input type="button" name="przycisk3" value="Do widzenia!"/>
				</td>
			</tr>
		</table>
	</form>	
	<p>
		<a href="http://www.goldynd.cba.pl/index.php">Strona Główna</a>
	</p>
</body>