<?php
// Načtení XML souboru
$xml = simplexml_load_file("weather.xml");

// Výpis informací o počasí
echo "City: " . $xml->location->city . "<br>";
echo "Country: " . $xml->location->country . "<br>";
echo "Temperature: " . $xml->current->temperature . "°C<br>";
echo "Humidity: " . $xml->current->humidity . "%<br>";
echo "Description: " . $xml->current->description . "<br>";
?>