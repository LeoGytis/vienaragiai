<?php

echo '<pre>';
$stringas = md5(time());

echo $stringas;


$rez = preg_replace_callback('/([0-9])([0-9]+)/', fn($m) => 
'<h2 style="display:inline;color:red;">'.$m[1].'</h2>'.'<h1 style="display:inline;">'.$m[2].'</h1>'
,$stringas);

echo '<br>';
print_r($rez);


function h1($m) {
    // print_r($m);
    return '<h2 style="display:inline;color:red;">'.$m[1].'</h2>'.'<h1 style="display:inline;">'.$m[2].'</h1>';
}


function funSum($a, $b) {
    return $b($a);
}

function meska($c) {
    return $c * 10;
}

echo '<br>';

echo funSum(5, fn($x) => $x * 3);

echo '<br>';
echo funSum(5, fn($x) => ++$x);

echo '<br>';
echo funSum(5, 'meska');


// function zuikis() {
//     return fn() => 123;
// }

$zuikis = fn() => fn($a) => 123 + $a;

$m = [$zuikis];

echo '<br>';
echo $m[0]()(7);
echo '<br>';echo '<br>';echo '<br>';


function recursive($num){
    echo 'IN' . $num, '<br>';
    if($num < 3){
        recursive($num + 1);
    }
    echo 'OUT' . $num, '<br>';
}
$startNum = 1;
recursive($startNum);


$rm = [
    3,
    [6, 4, [
        8, 1, [
            7, 1
        ], 7
    ], 9]
];

print_r($rm);



function arraySum($masyvas) {
    $suma = 0;
    foreach ($masyvas as $value) {
        if (!is_array($value)) {
            $suma += $value;
        }
        else {
            $suma += arraySum($value);
        }
    }
    return $suma;
}

echo arraySum($rm);











