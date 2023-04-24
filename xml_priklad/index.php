<?php
$xml = simplexml_load_file('data.xml');

foreach ($xml->children() as $child) {
  echo $child->getName() . ": " . $child . "<br>";
}
?>
