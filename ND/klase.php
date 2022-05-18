<?php
// rand nuo 100 iki 999. Parašyti 3 funkcijas, 
// sudėti jas į masyvą, tą masyvą praforyčinti ir kaip argumentą
// panaudoti sugeneruota rand.
// Funk daugina ir spausdina gautą argumentą 3, 5, 7 atitinkamai DONE!

echo '<pre>';

$r = rand(100, 999);

$fn1 = fn($d) => $d * 3;
$fn2 = fn($d) => $d * 5;
$fn3 = fn($d) => $d * 7;


function fun1($daugyba) {
    return $daugyba * 3;
}

function fun2($daugyba) {
    return $daugyba * 5;
}
function fun3($daugyba) {
    return $daugyba * 7;
}

$array = [fun1($r), fun2($r), fun3($r)];

foreach ($array as $value) {
    echo $value;
    echo '<br>';
    $newA[] = $value;
}

print_r($newA);
