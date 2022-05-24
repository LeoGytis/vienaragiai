<?php

$cats = [
    'Pūkis',
    'Murkis',
    'Pilkis',
    'Rainius'
];

for($i = 0; $i < 300; $i++) {
    $cats[] = rand(1000000, 9999999);
}

sleep(5);

$out = json_encode($cats);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

echo $out;