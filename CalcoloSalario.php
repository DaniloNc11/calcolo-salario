<html>
<body>
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
<b>Giorni</b><br>
<input type="text" name="Giorni" placeholder="Quanti giorni durera' il lavoro?" required><br>
<b>Ore giornaliere di lavoro</b><br>
<input type="text" name="OreGiornaliere" placeholder="Quanto lavori al giorno?"required><br>
<b>Compenso orario</b><br>
<input type="text" name="Compenso" placeholder="Quanto verrai pagato all'ora?"required><br>
<input type="submit" value="CALCOLA" name="Calcola">
</form>
<?php
if(isset($_POST["Calcola"]))
{
$Giorni=$_POST["Giorni"];
$OreGiornaliere=$_POST["OreGiornaliere"];
$Compenso=(Float)$_POST["Compenso"];
$Risultato=$Giorni*$OreGiornaliere*$Compenso;
echo "Guadagnerai $Risultato &#8364; lavorando $Giorni giorni al compenso di $Compenso &#8364;/h";
}
?>
</html>