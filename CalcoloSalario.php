<html>
<head>
<link rel="stylesheet" href="STILE.css">
</head>
<body>
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
<div class="Quadrato">
<h1 class="Titolo">Quanto sarai povero?</h1>
<p class="Giorni">Giorni</p><br>
<input type="text" name="Giorni" placeholder="Quanti giorni durera' il lavoro?" required class="Casella1"><br>
<p class="OreGiornaliere">Ore giornaliere di lavoro</p><br>
<input type="text" name="OreGiornaliere" placeholder="Quanto lavori al giorno?"required class="Casella2"><br>
<p class="Compenso">Compenso orario</p><br>
<input type="text" name="Compenso" placeholder="Quanto verrai pagato all'ora?"required class="Casella3"><br>
<input type="submit" value="CALCOLA" name="Calcola">
</form>
</div>
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