
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
						<td width="25%"> tekst często stosowany jako wypełniacz różnego</td>
						<td width="25%">tekst często stosowany jako wypełniacz różnego </td> 
						<td width="50%">tekst często stosowany jako wypełniacz różnego </td>
					</tr>
					<tr>
						<td width="25%"> tekst często stosowany jako wypełniacz różnego</td> 
						<td width="25%">
							<table>
								<tr>
									<td>tekst często stosowany jako wypełniacz różnego</td>
								</tr> 
								<tr>
									<td>tekst często stosowany jako wypełniacz różnego</td>
								</tr>	
							</table> 
						</td> 
						<td width="50%">tekst często stosowany jako wypełniacz różnego</td>
					</tr>
					<tr>
						<td width="25%"> tekst często stosowany jako wypełniacz różnego8</td>
						<td width="25%">tekst często stosowany jako wypełniacz różnego </td> 
						<td width="50%">tekst często stosowany jako wypełniacz różnego </td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width = "100%">
					<tr>
						<td width = "100%">tekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnego</td>
					</tr>
					<tr>
						<td width = "100%">tekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnego</td>
					</tr>
					<tr>
						<td width = "100%">tekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnego</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr>
			<td>
				<table width="100%">
					<tr >
						<td width="50%" > tekst często stosowany jako wypełniacz różnego tekst często stosowany jako wypełniacz różnego</td>
						<td width="50%">tekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnego</td> 
					</tr>
					<tr >
						<td width="50%" > tekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnego</td>
						<td width="50%">tekst często stosowany jako wypełniacz różnegotekst często stosowany jako wypełniacz różnego </td> 
					</tr>
				</table>
			</td>
		</tr>
			
		<tr>
			<td>
				<table width="100%">
					<tr >
						<td width="25%" > 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%">
							<img src="lol.jpg" alt="opis"/>
						</td>      
						<td width="50%"> 
							<table width="100%"> 
								<tr> 
									<td>jeden jeden jedenjeden jedenjede njeden jedenjeden jedenjede njed enjedenj edenjede njedenjedenjeden</td>
								</tr> 
								<tr>
									<td>dwadwadwa wadwad wadwadwadwa dwadwad wadwadwadw adwadwad wadwad wadwadwad </td>
								</tr>
							</table> 
						</td>
					</tr>
					<tr >
						<td width="25%" > 
							<img src="lol.jpg" alt="opis"/>
						</td>
						<td width="25%">
							<img src="lol.jpg" alt="opis"/>
						</td>  
						<td width="50%"> 
							<table width="100%"> 
								<tr> 
									<td>jedenj edenjed enjedenjedenje denjed enjedenjedenjed enjedenjedenjede njedenjedenjed enjedenjeden</td>
								</tr> 
								<tr>
									<td>dwadwadwa dwadwadw adwadwadwadw adw adwa wadwadwa dwadwadwa dwad wadwadwadw adwad </td>
								</tr>
							</table> 
						</td>
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