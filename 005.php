<?php
echo '<pre>';
$namas = [56 => 'Bebras', 'brolis' => 'Jonas', 'Simona'];

// print_r($namas);

echo '<br>';

$namas[1] = 'Barsukas';

// echo $namas[1];

$namas[] = 'Laima';
array_push($namas, 'Kazys');
array_unshift($namas, 'Pelė');

echo '<br>';

// print_r($namas);

// array_pop($namas);
// array_shift($namas);

// array_splice($namas, 1, 1);

$namas['stogas'] = 'Karlsonas';


echo '<br>';

// print_r($namas);

foreach($namas as $key => $value) {
    // echo '<br>';
    // echo "$key => $value";
}

$A = 5;

// echo '<br>';echo '<br>';

$C = &$A;

$A = 8;

unset($C);
unset($C);
// $C = 15;

// $d;

var_dump($Z);


$colors = ['blue', 'red', 'green', 'yellow'];

// foreach($colors as &$value){}

// unset($value);


foreach($colors as $key => $value){

    $colors[$key] = $colors[$key] . '***';

}

foreach($colors as &$value){

    $value = $value . '+++';

}

$value = 'gaidys';

print_r($colors);

foreach(range(1, 5) as $v) {
    echo $v;
}



