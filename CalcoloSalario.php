<html>
<body>
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
<b>Giorni</b><br>
<input type="text" name="Giorni" placeholder="Quanti giorni durera' il lavoro?"><br>
<b>Ore giornaliere di lavoro</b><br>
<input type="text" name="OreGiornaliere" placeholder="Quanto lavori al giorno?"><br>
<b>Compenso orario</b><br>
<input type="text" name="Compenso" placeholder="Quanto verrai pagato all'ora?"><br>
<input type="Button" name="CALCOLA">
</form>
<?php

?>
</html>