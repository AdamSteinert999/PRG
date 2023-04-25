<?php
// Načtení CSV souboru
$file = fopen("weather.csv","r");

// Přeskočení prvního řádku s hlavičkami sloupců
fgetcsv($file);

// Výpis informací o počasí
while(!feof($file)) {
    $data = fgetcsv($file);
    if ($data) {
        echo "City: " . $data[0] . "<br>";
        echo "Country: " . $data[1] . "<br>";
        echo "Temperature: " . $data[2] . "°C<br>";
        echo "Humidity: " . $data[3] . "%<br>";
        echo "Description: " . $data[4] . "<br><br>";
    }
}

// Uzavření souboru
fclose($file);
?>