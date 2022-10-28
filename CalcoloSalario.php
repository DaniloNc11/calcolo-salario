<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="STILE.css">
    </head>
    <body>

        <form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post'>
        <div class="Quadrato">
            <h1 class="Titolo">Quanto sarai povero?</h1>
            <p class="Giorni">Giorni</p><br>
            <input type="text" name="Giorni" placeholder="Quanti giorni durera' il lavoro?" required class="Casella1"><br>
        
            <hr class="Separatore"><br>
        
            <p class="Campo">Campo obbligatorio</p><br>
            <p class="OreGiornaliere">Ore giornaliere di lavoro</p><br>
            <input type="text" name="OreGiornaliere" placeholder="Quanto lavori al giorno?"required class="Casella2"><br>

            <hr class="Separatore"><br>

            <p class="Campo">Campo obbligatorio</p><br>
            <p class="Compenso">Compenso orario</p><br>
            <input type="text" name="Compenso" placeholder="Quanto verrai pagato all'ora?"required class="Casella3"><br>

            <hr class="Separatore"><br>

            <p class="Campo">Campos obbligatorio</p><br>
            <input type="submit" value="CALCOLA" name="Calcola" class="Bottone"><br>
            
            <?php
                if(isset($_POST["Calcola"])){
                $Giorni=$_POST["Giorni"];
                $OreGiornaliere=$_POST["OreGiornaliere"];
                $Compenso=(Float)$_POST["Compenso"];
                $Risultato=$Giorni*$OreGiornaliere*$Compenso;

                echo "Guadagnerai $Risultato &#8364; lavorando $Giorni giorni al compenso di $Compenso &#8364";
                }
            ?>
            
            </div>
        </form>
    </body>
</html>