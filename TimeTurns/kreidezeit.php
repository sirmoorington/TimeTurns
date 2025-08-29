<?php
session_start();
include("timeturns_array.inc.php");
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Späte Kreidezeit</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navigation -->
    <div class="navigation">
        <a href="startseite.html">
            <li><img src="bilder/Logo.png"></li>
        </a>
        <a class="Entdecken" href="main.php">
            <li>Entdecken</li>
        </a>
        <a class="Bewerten" href="Bewerten.php">
            <li>Bewerten</li>
        </a>
        <a href="warenkorb.php"><img class="zwei" id="warenkorb" src="bilder/warenkorb.png"></a>
    </div>

    <div class="Bilder1">
        <img class="Bilder" src="bilder/Dino.jpg">
    </div>

    <div class="box">
        <h1 class="InfoÜberschrift">Späte Kreidezeit</h1>
        <p class="Infotext">
            Tauchen Sie ein in die Welt der Dinosaurier und erleben Sie die faszinierende späte Kreidezeit. Begeben Sie sich auf Entdeckungstouren durch prähistorische Landschaften, machen Sie eine luxuriöse Dinosaurier-Kreuzfahrt oder wagen Sie ein Abenteuer im prähistorischen Dschungel. Erleben Sie die Wunder und die Schönheit einer vergangenen Ära.
        </p>
    </div>

    <div class="Bestellen">
        <?php foreach ($kreidezeit_feld as $key => $value) : ?>
            <div class="Bestellformular">
                <img src="bilder/<?php echo $key; ?>.jpg">
                <h2><?php echo $value['name']; ?></h2>
                <p><?php echo $value['preis']; ?>€</p>
                <div class="b1">
                    <input type="number" id="<?php echo $key; ?>" name="<?php echo $key; ?>" value="1" min="0">
                    <button class="addToCart" data-product="<?php echo $key; ?>">+</button>
                </div>
            </div>
        <?php endforeach; ?>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".addToCart").click(function(event) {
                event.preventDefault(); // Verhindert das Standardverhalten des Formulars
                let product = $(this).data('product');
                let quantity = $("#" + product).val();

                $.ajax({
                    url: 'warenkorb.php',
                    method: 'POST',
                    data: {
                        product: product,
                        quantity: quantity
                    },
                    success: function(response) {
                        alert("Der Artikel wurde zum Warenkorb hinzugefügt");
                    }
                });
            });
        });
    </script>

    <script src="jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
