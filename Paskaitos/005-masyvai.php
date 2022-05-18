<?php
echo '<pre>';
$namas = [56 => 'Bebras', 'brolis' => 'Jonas', 'Simona'];

print_r($namas);
echo '===========<br>';

$namas[1] = 'Barsukas';         //Pushina nauja indeksa ir kintama i areju
echo $namas[1];
echo '<br>===========<br>';


$namas[] = 'Laima';             //Pushina nauja kintama i areju
array_push($namas, 'Kazys');    //Push one or more elements onto the end of array
array_unshift($namas, 'Pelė');  //Prepend one or more elements to the beginning of an array
print_r($namas);

array_pop($namas);              //Pop(Istrina) the element off the end of array
array_shift($namas);            //Shift(istrina) an element off the beginning of array (ir nueklia indeksus i pradzia)
array_splice($namas, 1, 1);     //Remove a portion of the array and replace it with something else

$namas['stogas'] = 'Karlsonas'; //Pushina nauja indeksa ir kintama i areju
echo '<br>';

print_r($namas);

foreach($namas as $key => $value) {
    // echo '<br>';
    // echo "$key => $value";
}

$A = 5;

echo '<br>';
echo '<br>';

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



