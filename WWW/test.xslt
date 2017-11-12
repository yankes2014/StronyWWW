<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <style type="text/css">
		body 
		{
		background-image: url("obrazek.jpg");
		background-repeat: no-repeat;
		background-size: 750px 850px;
		font-size: small;
		}
		</style>
	</head>
	<body>
        <table border="0" style="width: 750px; height: 50px;" >
	<tr align="right" valign="top" >
		<td style="width: 520px; height: 17px; padding-top:3px;"><xsl:value-of select="Faktura/daty/Miejsce"/></td>
		<td></td>
	</tr>
	<tr align="right" valign="top">
		<td style="height: 17px;"><xsl:value-of select="Faktura/daty/DataSprzedazy"/></td>
	</tr>
	<tr align="right" valign="top">
		<td style="height: 17px;"><xsl:value-of select="Faktura/daty/DataWystawienia"/></td>		
	</tr>
		</table>
	<table border="0" style="width: 750px; height: 50px;" >
	<tr align="right" valign="top">
		<td style="font-size: large; width: 412px; padding-top: 50px; height:25px;"><xsl:value-of select="Faktura/NumerFaktury"/></td>
		<td></td>
	</tr>	
	</table>
	<table border="0" style="width: 750px; height: 228px;" >
	<tr align="left" valign="top">
		<td style="width: 322px; height: 17px;" ></td>
		<td style=" padding-top: 85px;"><xsl:value-of select="Faktura/Nabywca/ImieNazwisko"/></td>
	</tr>
	<tr align="left" valign="top">
		<td></td>
		<td style=" padding-top: 0px; "><xsl:value-of select="Faktura/Nabywca/AdresNabywcy"/></td>
	</tr>
	</table>
	<table border="0" style="width: 750px; height: 136px; font-size: medium;" >
	<tr align="left" valign="top"><td >
		<table border="0" style="width: 750px; height: 24px;">
		<xsl:for-each select="Faktura/Uslugi/Rzecz">
			<tr>
				<td style="padding-left: 50px; width: 150px; height: 24px;"><xsl:value-of select="Nazwa"/></td>
				<td style="width: 55px;"><xsl:value-of select="PKWIU"/></td>
				<td style="width: 30px;"><xsl:value-of select="JM"/></td>
				<td style="width: 40px;"><xsl:value-of select="Ilosc"/></td>
				<td style="width: 95px;"><xsl:value-of select="Cena"/></td>
				<td style="width: 90px;"><xsl:value-of select="WartBrutto"/></td>
				<td style="width: 35px;"><xsl:value-of select="VatProcent"/></td>
				<td style="width: 80px;"><xsl:value-of select="VatZl"/></td>
				<td style=""><xsl:value-of select="WartNetto"/></td>
			</tr>
		</xsl:for-each>
		</table>
	</td></tr>	
	</table>
	<table border="0" style="width: 750px; height: 120px;" >
		<tr align="left" valign="top">
			<td style="padding-left: 80px; padding-top: 29px; height:10px; font-size:medium;"><xsl:value-of select="Faktura/Slownie"/></td>
		</tr>
	</table>
	<table border="0" style="width: 750px; height: 100px; ">
		<tr align="left" valign="top">
			<td style="height: 14px; width:100px; padding-left: 110px; padding-top: 0px;"><xsl:value-of select="Faktura/FormaPlatnosci"/></td>
			<td style="padding-left: 80px; padding-top: 0px;"><xsl:value-of select="Faktura/Zaplacono"/></td>
		</tr>
		<tr>
			<td style="height: 15px; padding-left: 110px;"><xsl:value-of select="Faktura/TerminPlatnosci"/></td>
		</tr>
		<tr align="left" valign="top">
			<td colspan="2" style="padding-left: 150px; padding-top: 28px; font-size: medium;"><xsl:value-of select="Faktura/Wystawil"/></td>
			<td style="width: 280px; padding-left: 50px; padding-top: 28px; font-size: medium;"> <xsl:value-of select="Faktura/Odebral"/></td>
		</tr>
	</table>
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>