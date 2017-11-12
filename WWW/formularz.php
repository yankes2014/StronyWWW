<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
   <title>Formularz</title>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
</head>

<body>
<?php
function sprawdz($dana)
{
	$zm=$_GET[$dana];
	if($zm) echo($zm);
	else echo("Nic nie wpisano");
}
?>

<table width="100%">
	<tr><td  align="center"><font size="7">Formularz </font></td></tr>
	<tr>	<td width = "20%" align="right"> Podaj imie:</td><td width="80%"> <?php sprawdz('imie')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj nazwisko:</td><td width="80%"><?php sprawdz('nazwisko')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj ulice:</td><td width="80%"> <?php sprawdz('ulica')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj numer domu:</td><td width="80%"> <?php sprawdz('nr_domu')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj numer mieszkania:</td><td width="80%"> <?php sprawdz('nr_mieszkania')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj kod pocztowy:</td><td width="80%"> <?php sprawdz('kod_pocztowy')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj miasto:</td><td width="80%"> <?php sprawdz('miasto')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj date urodzenia:</td><td width="80%"> <?php sprawdz('data_urodzenia')?></td>	</tr>
	<tr>	<td width = "20%" align="right"> Podaj numer telefonu:</td><td width="80%"> <?php sprawdz('telefon')?></td>	</tr>
	
	<tr>	<td width = "20%"align="right"> Czy jestes studentem SGGW:</td><td width="80%"> 
	<?php
			$zm=isset($_GET['student'])?$_GET['student']:null;
			echo ('<input type="checkbox" '.(($zm=="Tak")?'checked="checked"':'').' disabled="disabled"/>');
			?>
			
	</td>	</tr>
	<tr>	<td width = "20%"align="right"> Podaj plec:</td><td width="80%"> <?php
			$plec=isset($_GET['plec'])?$_GET['plec']:null;
			if($plec != null)
			{
				echo ($plec=="k")?"K":"M";
			}
			else echo "brak danych";
			?></td>	</tr>
	
		<tr>	<td width = "20%"align="right"> Wybierz wyksztalcenie:</td> <td width="80%"> <?php sprawdz('wyksztalcenie')?>
	</td>	</tr>
	
	
	
</table>

<p><a href="http://goldynd.cba.pl/indeks.html">Strona Glowna</a></p>
</body>
</html>