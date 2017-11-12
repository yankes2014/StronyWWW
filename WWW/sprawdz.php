
<?php
session_start();
if($_POST["login"]=="login" && $_POST["haslo"]=="haslo")
{
$_SESSION["czyZalogowano"]=true;
header("Location:http://www.goldynd.cba.pl/index.php");
}
else
header("Location:http://www.goldynd.cba.pl/logowanie.html"); 
?>