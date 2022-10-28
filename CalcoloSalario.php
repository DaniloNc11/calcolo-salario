<html>
<head>
<link rel="stylesheet" href="STILE.css">
</head>
<body>
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
<h1 class="Titolo">Quanto sarai povero?</h1>
<p class="Giorni">Giorni</p><br>
<input type="text" name="Giorni" placeholder="Quanti giorni durera' il lavoro?" required><br>
<p class="OreGiornaliere">Ore giornaliere di lavoro</p><br>
<input type="text" name="OreGiornaliere" placeholder="Quanto lavori al giorno?"required><br>
<p class="Compenso">Compenso orario</p><br>
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