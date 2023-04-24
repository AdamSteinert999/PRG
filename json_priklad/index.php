<?php
$json = file_get_contents('users.json');
$data = json_decode($json, true); // true znamená, že chceme získat pole namísto objektu

// vypíše všechny uživatele v souboru
foreach ($data as $user) {
    echo $user['name'] . ' (' . $user['email'] . ')' . "\n";
}
?> 