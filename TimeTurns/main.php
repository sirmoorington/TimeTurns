<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Angkor&family=Tilt+Warp&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>TimeTurns</title>
</head>
<body>

<!-- Navigation -->
    <div class="navigation">
            <a href ="startseite.html"><li><img src="bilder/Logo.png"></li></a>
            <a class ="Entdecken" href="#"><li>Entdecken</li></a>
            <a class ="Bewerten" href="Bewerten.php"><li>Bewerten</li></a>
            <a href ="warenkorb.php"><img class="zwei" id ="warenkorb" src="bilder/warenkorb.png"></a>
    </div>

<!-- Suchfeld -->
    <div class="container">
        <h1>Wohin soll es gehen?</h1>

        <form method="POST" action="suche.php">
            <input type ="search" placeholder="Sehenswürdigkeiten, Aktivitäten, Hotels ..." name ="suche">
            <button type ="submit">Suchen</button>
        </form>

    </div>

<!--Bilder -->

<div class="Rahmen">
    <div class="Orte">

    <div class="Ägypten">
    <h1>Reise ins alte Ägypten</h1>
    <p>Erlebe das alte Ägypten vor über 5000 Jahren!</p>
    <p>Die Ägypter waren ein sehr musik- und kunstfreudiges Volk und Gesang sowie Klänge von Harfe, Laute, Flöte, Klappern oder Tamburins waren üblich.</p>
    <a href="ägypten.php"><button id="MehrErfahren">Mehr Erfahren</button></a>
</div>

<div class="Kreidezeit">
    <h1>Abenteuer in der Kreidezeit</h1>
    <p>Begebe dich vor über 100 Millionen Jahren in die Ära der Dinosaurier!</p>
    <p>Die Kreidezeit war eine faszinierende Periode, in der gigantische Kreaturen wie der Tyrannosaurus Rex, der Brachiosaurus und der Stegosaurus die Erde beherrschten.</p>
    <a href="kreidezeit.php"><button id="MehrErfahren">Mehr Erfahren</button></a>
</div>

<div class="Römer">
    <h1>Entdecke das antike Rom</h1>
    <p>Tauche ein in die Welt des antiken Roms vor über 2000 Jahren!</p>
    <p>Die Römer waren berühmt für ihre Ingenieurskunst, ihre beeindruckenden Bauwerke wie das Kolosseum und ihre reiche Kultur, die das Fundament für die westliche Zivilisation legte.</p>
    <a href="römer.php"><button id="MehrErfahren">Mehr Erfahren</button></a>
</div>

<div class="Islam">
    <h1>Reise in die islamische Goldene Ära</h1>
    <p>Erlebe die Blütezeit des Islam zwischen dem 8. und 14. Jahrhundert n.Chr.!</p>
    <p>In dieser Epoche erlebten die muslimischen Länder eine beispiellose Blüte in Wissenschaft, Kunst, Architektur und Philosophie. Berühmte Gelehrte wie Ibn Sina, Al-Kindi und Al-Ghazali prägten das intellektuelle Leben dieser Zeit.</p>
    <a href="islam.php"><button id="MehrErfahren">Mehr Erfahren</button></a>
</div>

<div class="Azteken">
    <h1>Erkunde das aztekische Reich</h1>
    <p>Entdecke die faszinierende Kultur der Azteken im präkolumbischen Mexiko!</p>
    <p>Die Azteken waren bekannt für ihre beeindruckende Architektur, ihre religiösen Rituale und ihre komplexe Gesellschaftsstruktur. Ihre Hauptstadt Tenochtitlán war ein Zentrum der Macht und Kultur.</p>
    <a href="azteken.php"><button id="MehrErfahren">Mehr Erfahren</button></a>
</div>


    </div>
</div>

<footer class="footer">
        <div class="container2">
            <div class="footer-content">
                <div class="firmenname">
                    <h3>TimeTurns</h3>
                </div>
                <div class="social-media">
                    <a href="#"><img src="bilder/Facebook.svg" alt="Facebook"></a>
                    <a href="#"><img src="bilder/Twitter.svg" alt="Twitter"></a>
                    <a href="#"><img src="bilder/Instagram.svg" alt="Instagram"></a>

                </div>
            </div>
        </div>
    </footer>

    
<script src="jquery-3.7.1.min.js"></script>
<script src="script.js"></script>
</body>
</html>