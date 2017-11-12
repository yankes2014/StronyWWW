
<head>
   <title>An XHTML 1.0 Strict standard template</title>
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
	
	<table border="0" width="100%">
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
					</tr>
					<tr>
						<td width="25%" align="center"> OPIS 1</td> 
						<td width="25%" align="center"> OPIS 2</td> 
						<td width="25%" align="center"> OPIS 3</td> 
						<td width="25%" align="center"> OPIS 4</td>
					</tr>
					<tr>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
					</tr>
					<tr>
						<td width="25%" align="center"> OPIS 1</td> 
						<td width="25%" align="center"> OPIS 2</td> 
						<td width="25%" align="center"> OPIS 3</td> 
						<td width="25%" align="center"> OPIS 4</td>
					</tr>
					<tr>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%" align="center"> 
							<img src="lol.jpg" alt="opis"/>
						</td>
					</tr>
					<tr>
						<td width="25%" align="center"> OPIS 1</td> 
						<td width="25%" align="center"> OPIS 2</td> 
						<td width="25%" align="center"> OPIS 3</td> 
						<td width="25%" align="center"> OPIS 4</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="center">
							<a href="http://www.goldynd.cba.pl/zadanie2a.php">Do pierwszej strony</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="http://www.goldynd.cba.pl/zadanie2b.php">Do drugiej strony</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="http://www.goldynd.cba.pl/zadanie2c.php">Do trzeciej strony</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="http://www.goldynd.cba.pl/index.php">Strona Glowna</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>