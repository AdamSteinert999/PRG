<?php
// Načtení JSON souboru
$json = file_get_contents("weather.json");

// Dekódování JSON dat
$data = json_decode($json);

// Výpis informací o počasí
echo "City: " . $data->location->city . "<br>";
echo "Country: " . $data->location->country . "<br>";
echo "Temperature: " . $data->current->temperature . "°C<br>";
echo "Humidity: " . $data->current->humidity . "%<br>";
echo "Description: " . $data->current->description . "<br>";
?>