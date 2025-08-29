<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Suche</title>
</head>
<body>
    <!-- Navigation -->
    <div class="navigation">
            <a href ="startseite.html"><li><img src="bilder/Logo.png"></li></a>
            <a class ="Entdecken" href="main.php"><li>Entdecken</li></a>
            <a class ="Bewerten" href="Bewerten.php"><li>Bewerten</li></a>
            <img class="zwei" id ="warenkorb" src="bilder/warenkorb.png">
    </div>

<!-- Warenkorb-Popup -->
<div id="anzeige1">
<div id="anzeige">
    <div id="Warenkorb-popup">
        <h1>Dein Warenkorb ist leer!</h1>
        <button class ="Warenkorb-weiter">Buchen</button>
    </div>
    <div class="hintergrund" id="hintergrund"></div>
    </div>
</div>

<script src="jquery-3.7.1.min.js"></script>
<script src="script.js"></script>



<?php
session_start();
include("timeturns_array.inc.php");

            if(isset($_POST['suche'])) {
                $Suche = $_POST['suche'];

                echo "<p>Suche: $Suche</p>";
            } else {
            
                echo "<p>Keine Suche vorhanden</p>";
            }
?>
</body>
</html>
