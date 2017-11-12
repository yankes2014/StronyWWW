
<head>
   <title>Strona Główna</title>
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
	<p> Gołdyn Dominik </p>
	<p>
		<a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
		</a>
	</p>
	<p>
		<a href="/zadanie2a.php">Zadanie2A</a>
	</p>
	<p>
		<a href="/zadanie2b.php">Zadanie2B</a>
	</p>
	<p>
		<a href="/zadanie2c.php">Zadanie2C</a>
	</p>
	<p>
		<a href="/bazar12.php">Zadanie3</a>
	</p>
	<p>
		<a href="/kalkulator1.php">Zadanie5</a>
	</p>
	<p>
		<a href="/zadanie6.php">Zadanie6</a>
	</p>
	<p>
		<a href="/zadanie7.xml">Zadanie7</a>
	</p>
	<p>
		<a href="/zadanie3.php">Zadanie8</a>
	</p>
	<p>
		<a href="/zadanie8.txt">Zadanie8 php</a>
	</p>
	<p>
		<a href="/zadanie9a.txt">Zadanie9  Sprawdzanie danych</a>
	</p>
	<p>
		<a href="/zadanie9b.txt">Zadanie9  Wyloguj </a>
	</p>
	<p>
		<a href="/zadanie9c.txt">Zadanie9  Sprawdzanie czy zalogowano</a>
	</p>
	<p>
		<a href="/osoby.php">Zadanie10</a>
	</p>
	<p>
		<a href="/zadanie11.php">Zadanie11</a>
	</p>
</body>
