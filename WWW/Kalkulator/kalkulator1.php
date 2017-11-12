
<head>
   <title>Kalkulator</title>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   
   <script src="kalkulator.js" type="text/javascript"></script>

   <style type="text/css">
	   	.guzik
	   	{
	   		width: 75px;
	   		height: 75px;
	   		float: left;
	   		font-size: 15pt;
	   	}
		.czysci
	   	{
	   		width: 300px;
	   		height: 75px;
	   		float: left;
	   		font-size: 15pt;
	   	}
	</style>
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
	<div class="width: 100%;">
		<div style="width:300px; text-align: center;">
			<textarea id="ekranWyswietlajacy"></textarea>
			<div >
				<input type="button" id="b7" value="7" class="guzik"  onclick="Siedem();"/>
				<input type="button" id="b8" value="8" class="guzik" onclick="Osiem();"/>
				<input type="button" id="b9" value="9" class="guzik" onclick="Dziewiec();"/>
				<input type="button" id="pomnoz" value="*" class="guzik" onclick="Pomnoz();" />
		
				<input type="button" id="b4" value="4" class="guzik" onclick="Cztery();" />
				<input type="button" id="b5" value="5" class="guzik" onclick="Piec();" />
				<input type="button" id="b6" value="6" class="guzik"  onclick="Szesc();"/>
				<input type="button" id="podziel" value="/" class="guzik"  onclick="Podziel();" />
			
				<input type="button" id="b1" value="1" class="guzik"  onclick="Jeden();" />
				<input type="button" id="b2" value="2" class="guzik"  onclick="Dwa();" />
				<input type="button" id="b3" value="3" class="guzik"  onclick="Trzy();" />
				<input type="button" id="dodaj" value="+" class="guzik"  onclick="Dodaj();" />
		
				<input type="button" id="b0" value="0" class="guzik" onclick="Zero();"/>
				<input type="button" id="bprzecinek" class="guzik" value="."  onclick="Przecinek();" />
				<input type="button" id="brownasie" value="=" class="guzik" onclick="RownaSie();"/>
				<input type="button" id="bodejmij" value="-" class="guzik"  onclick="Odejmij();"/>
		
				<input type="button" id="clear" value="Clear" class="czysci" onclick="Wyczysc();" />
			
				<a href="http://www.goldynd.cba.pl/index.php">Strona Główna</a>
				<p>
					<a href="http://validator.w3.org/check?uri=referer">
						<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
					</a>
				</p>
			</div>
		</div>
	</div>	
</body>