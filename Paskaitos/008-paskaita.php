<?php
echo '<pre>';


echo preg_replace_callback(
    '/\.(.*)\./',
    'ieskok',
    'xvbc.vkb'.rand(1000, 9999). '.dslkhc46465jkbciud');

echo '<br>';

function ieskok($m) {
    print_r($m);
    return '<b>'.$m[1].'</b>';
}


$m = [5,5,7,5,9,8,7,7,9];

$m3 = array_slice($m, -3);

print_r($m3);



$sk = rand(100, 999);
$funkcijuMasyvas = [];

array_push($funkcijuMasyvas,
fn($a) => $a * 3,
fn($a) => $a * 5,
fn($a) => $a * 7
);


foreach($funkcijuMasyvas as $go) {
    echo $go($sk).'<br>';
}




