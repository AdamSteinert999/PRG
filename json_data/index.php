<?php
// načtení dat ze souboru
$data = file_get_contents('data.json');

// převod dat do PHP objektu
$json = json_decode($data);

// výpis dat
foreach ($json as $item) {
  echo "ID: " . $item->id . "<br>";
  echo "Name: " . $item->name . "<br>";
  echo "Email: " . $item->email . "<br><br>";
}
?>
