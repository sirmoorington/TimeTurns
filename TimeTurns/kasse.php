<?php
session_start();

// Include the arrays containing article information
include("timeturns_array.inc.php");

if (isset($_POST["absenden"])) {
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $ort = $_POST["wohnort"];
    $zahlungsmethode = $_POST["zahlungsart"];

    $bestellung = "\n\nArt.-Nr.;Artikel;Menge;Preis\n";
    $gesamtPreis = 0; // Variable zur Berechnung des Gesamtpreises
    ?>
    <html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kasse</title>
    <script>
        function updateZahlungsart(zahlungsart) {
            document.getElementById('selectedZahlungsart').value = zahlungsart;
        }
    </script>
</head>
    <div class="bestellinformationen">
    <h2>Bestellinformationen:</h2>
    <p><?php echo $vorname . " " . $nachname; ?> aus <?php echo $ort; ?></p>
    <table>
        <tr>
            <th>Art.-Nr.</th>
            <th>Artikel</th>
            <th>Menge</th>
            <th>Preis</th>
        </tr>
<?php
    foreach ($_SESSION as $key => $value) {
        $articleName = "";
        $preis = 0;

        if (substr($key, 0, 1) == "a") {
            $articleName = isset($ägypten_feld[$key]) ? $ägypten_feld[$key]['name'] : '';
            $preis = isset($ägypten_feld[$key]) ? $ägypten_feld[$key]['preis'] * $value : 0;
        }
        if (substr($key, 0, 1) == "k") {;
            $articleName = isset($kreidezeit_feld[$key]) ? $kreidezeit_feld[$key]['name'] : '';
            $preis = isset($kreidezeit_feld[$key]) ? $kreidezeit_feld[$key]['preis'] * $value : 0;
        }
        if (substr($key, 0, 1) == "r") {
            $articleName = isset($römer_feld[$key]) ? $römer_feld[$key]['name'] : '';
            $preis = isset($römer_feld[$key]) ? $römer_feld[$key]['preis'] * $value : 0;
        }
        if (substr($key, 0, 1) == "i") {
            $articleName = isset($islam_feld[$key]) ? $islam_feld[$key]['name'] : '';
            $preis = isset($islam_feld[$key]) ? $islam_feld[$key]['preis'] * $value : 0;
        }
        if (substr($key, 0, 1) == "z") {
            $articleName = isset($azteken_feld[$key]) ? $azteken_feld[$key]['name'] : '';
            $preis = isset($azteken_feld[$key]) ? $azteken_feld[$key]['preis'] * $value : 0;
        }

        echo "<tr><td>$key</td><td>$articleName</td><td>$value</td><td>$preis</td></tr>";
        $bestellung .= "$key;$articleName;$value;$preis\n";
        $gesamtPreis += $preis; // Addiere den Preis dieses Artikels zum Gesamtpreis
    }
?>
    <tr class="gesamtsumme">
    <td colspan="3">Gesamtsumme:</td>
    <td><?php echo $gesamtPreis; ?> Euro</td>
</tr>
</table>
<p>Sie haben mit <?php echo $zahlungsmethode; ?> gezahlt.</p>
<p>Vielen Dank! Die Session wird beendet.</p>
</div>
<?php
    // Bestellung in Datei speichern
    if (file_put_contents("bestellung.csv", $bestellung, FILE_APPEND)) {
        echo "<p>Die Bestelldaten wurden in der Datei bestellung.csv gespeichert</p>";
    }


    // Session löschen
    $_SESSION = array();
    session_destroy();
} else {
?>
    <html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kasse</title>
    <script>
        function updateZahlungsart(zahlungsart) {
            document.getElementById('selectedZahlungsart').value = zahlungsart;
        }
    </script>
</head>
<body>
    <!-- Navigation -->
    <div class="navigation">
        <a href="startseite.html"><li><img src="bilder/Logo.png"></li></a>
        <a class="Entdecken" href="main.php"><li>Entdecken</li></a>
        <a class="Bewerten" href="Bewerten.php"><li>Bewerten</li></a>
        <img class="zwei" id="warenkorb">
    </div>

    <div class="bitte">
    <h1>Buchung abschließen</h1>
    <hr style="width: 40%">
</div>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div class="abschliessen">
        <div class="Kontaktformular">
            <label for="vorname">Vorname</label>
            <input type="text" name="vorname"> 

            <label for="nachname">Nachname</label>
            <input type="text" name="nachname">

            <label for="wohnort">Wohnort</label>
            <input type="text" name="wohnort">

            <div class="zahlungsmethoden">
                <img src="zahlungsmethoden/visa.png" onclick="updateZahlungsart('visa')">
                <img src="zahlungsmethoden/mastercard.png" onclick="updateZahlungsart('mastercard')">
                <img src="zahlungsmethoden/paypal.png" onclick="updateZahlungsart('paypal')">
                <input type="hidden" name="zahlungsart" id="selectedZahlungsart">
            </div>
            <input type="submit" name="absenden" value="Absenden">
        </div>
    </div>
</form>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php
}
?>
