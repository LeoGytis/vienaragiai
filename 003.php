<?php


$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);

$c2 = 0;

if ($a == 2) {
    $c2++;
}
if ($b == 2) {
    $c2++;
}
if ($c == 2) {
    $c2++;
}
if ($d == 2) {
    $c2++;
}
$c1 = $a + $b + $c + $d - ($c2 * 2);
$c0 = 4 - $c1 - $c2;

$petras = 'birute';

$antanas = 'petras';

$birute = 'Labas';

// echo $$$antanas;
echo '<pre>';
// print_r(['lape', ['kate'], 'gaidys']);

var_dump(!!'karve');
var_dump(!!'');
var_dump((bool)'karve');

var_dump((int) '09');


$drambliai = -4;
if ($drambliai > 0) {
    echo 'Yra dramblių';
}
elseif($drambliai < 0) {
    echo 'Dramblių buvo ir jau nėra';
}
else {
    echo 'Nėra dramblių'; 
}

echo '<br>';


$drambliai = 10;
$raganosiai = 3;
$begemotai = 6;
if ($begemotai <= $raganosiai || $begemotai <= $drambliai) {
    echo 'Begemotų nėra daugiausiai';
}

/*
<   <===>   >=
>   <===>   <=
==  <===>   !=
||  <===>   &&
*/

$a = 0;

6 > 15 ? $a++ : (8 > 14 ? $a+=10 : $a--);

echo '<br>';

echo $a;


$b = 9;
// unset($b);


var_dump(!isset($b) || null === $b);
