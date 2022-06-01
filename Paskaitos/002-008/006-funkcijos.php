<?php


$valio = 'Valio!';
$kitas = 'KITAS';

// Deklaracija
function fun($hhh, $kkk, $t) {
    // global $valio, $kitas; // BAD BAD VERY BAD
    echo '<h1>FUN!!!!!</h1>';
    echo "<h1>$hhh</h1>";
    echo "<h1>$t $kkk</h1>";
    $atgal = 123;
    return $atgal;
}

function daugiklis($a, ...$m) {
    $rez = $m[0] * $m[1] * $a;
    return "<h2> $rez </h2>";
}




$mas = [5, 5, 10];

// echo daugiklis(6, 6, 10);

//Kvietimas
// $belenkas = fun($valio, $kitas, 'tiesiai');

//  echo $belenkas;


function kelintas() {
    static $k = 0;
    $k++;
    return $k;
}


echo kelintas();
echo kelintas();
echo kelintas();
echo kelintas();
echo kelintas();

$bevardo = function() {
    echo 'As neturiu vardo';
};


$bevardo();






