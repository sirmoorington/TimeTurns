<?php
session_start();
include("timeturns_array.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product']) && isset($_POST['quantity'])) {
    $product = $_POST['product'];
    $quantity = intval($_POST['quantity']);

    // Überprüfe, ob das Produkt im Array vorhanden ist
    if (array_key_exists($product, $ägypten_feld)) {
        // Füge das Produkt dem Warenkorb hinzu oder aktualisiere die Menge
        $_SESSION[$product] = isset($_SESSION[$product]) ? $_SESSION[$product] + $quantity : $quantity;
        echo "Produkt erfolgreich zum Warenkorb hinzugefügt!";
        exit; // Beende das Skript, um das HTML nicht zu rendern
    }
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Navigation -->
    <div class="navigation">
            <a href ="startseite.html"><li><img src="bilder/Logo.png"></li></a>
            <a class ="Entdecken" href="#"><li>Entdecken</li></a>
            <a class ="Bewerten" href="Bewerten.php"><li>Bewerten</li></a>
            <img class="zwei" id ="warenkorb">
    </div>

    <h1 class="IhrWarenkorb">Ihr Warenkorb</h1>
<div class="WarenkorbFeld">
    <?php
    // Warenkorb auslesen und Gesamtpreis berechnen
    $totalPrice = 0; // Initialisiere den Gesamtpreis
    echo "<table>
        <tr><th>Art.-Nr.</th><th>Artikel</th><th>Menge</th><th>Preis pro Stück</th><th>Gesamtpreis</th><th></th></tr>";
    foreach ($_SESSION as $key => $value) {
        $itemPrice = 0; // Initialisiere den Preis des Artikels
        if (substr($key, 0, 1) == "a") {
            echo "<tr>
                <td>$key</td>
                <td>{$ägypten_feld[$key]['name']}</td>
                <td>$value</td>
                <td>{$ägypten_feld[$key]['preis']} €</td>";
            $itemPrice = $value * $ägypten_feld[$key]['preis'];
            $totalPrice += $itemPrice; // Addiere den Preis des Artikels zum Gesamtpreis
            echo "<td>$itemPrice €</td>
                <td><form method='post'><input type='hidden' name='remove_product' value='$key'><button type='submit'>-</button></form></td>
                </tr>";
        }
        // Weitere Bedingungen für andere Produkte...
    }
    echo "<tr><td colspan='4'><b>Gesamtpreis:</b></td><td><b>$totalPrice €</b></td><td></td></tr>";
    echo "</table>";
    ?>
    <a href="main.php"><button>Weiter buchen</button></a>
    <a href="kasse.php"><button>Buchung abschließen</button></a>
</div>

<?php
// Entfernen eines Produkts aus dem Warenkorb
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_product'])) {
    $productToRemove = $_POST['remove_product'];
    // Entferne den Artikel aus dem Warenkorb
    unset($_SESSION[$productToRemove]);
    // Aktualisiere die Seite, um die Änderungen anzuzeigen
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
