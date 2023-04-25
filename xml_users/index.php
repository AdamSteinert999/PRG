<?php
// Načtení XML souboru
$xml = simplexml_load_file("users.xml");

// Procházení uživatelů v XML souboru
foreach ($xml->user as $user) {
    // Výpis informací o uživateli
    echo "Username: " . $user->username . "<br>";
    echo "Email: " . $user->email . "<br>";
    echo "Full name: " . $user->fullname . "<br>";
    echo "<br>";
}
?>