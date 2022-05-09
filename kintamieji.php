<?php

echo '<b> 1 Uzduotis </b><br>';

$vardas = 'Gytis';
$pavarde = 'Leoanvicius';
$gimD = 1987;
$metai = 2022;
$yearDif = $metai - $gimD;

echo "As esu $vardas $pavarde. Man yra $yearDif metai <br>";
echo "<br>";

echo '<b> 2 Uzduotis </b><br>';

$pirmaR = rand(1, 10);
$antraR = rand(1, 10);
echo "Atsitiktiniai kintamieji: $pirmaR ir $antraR <br>";

if ($pirmaR > $antraR) {
    $ats = $pirmaR / $antraR;
    echo round($ats, 2);
    echo "<br>";
} else if ($pirmaR < $antraR) {
    $ats = $antraR / $pirmaR;
    echo round($ats, 2);
    echo "<br>";
} else {
    echo "Skaiciai $pirmaR ir $antraR yra lygus. <br>";
}
echo "<br>";

echo '<b> 3 Uzduotis </b><br>';

$rand1 = rand(0, 25);
$rand2 = rand(0, 25);
$rand3 = rand(0, 25);

echo "Atsitiktiniai kintamieji: $rand1 $rand2 $rand3 <br>";

if ($rand1 <= $rand2 && $rand2 <= $rand3 || $rand1 >= $rand2 && $rand2 >= $rand3) {
    echo "Vidurine reiksme yra: $rand2 <br>";
} else if ($rand2 <= $rand1 && $rand1 <= $rand3 || $rand2 >= $rand1 && $rand1 >= $rand3) {
    echo "Vidurine reiksme yra: $rand1 <br>";
} else {
    echo "Vidurine reiksme yra: $rand3 <br>";
}
echo "<br>";

    
echo '<b> 4 Uzduotis </b><br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Krastiniu ilgiai: $a $b $c <br>";
echo "<br>";


if ($a + $b > $c 
    && $b + $c > $a 
    && $c + $a > $b) {
    echo "Trikampi sudaryti galima";    
} else {
    echo "Trikampio sudaryti negalima";
}
echo "<br>";

echo '<br><b> 5 Uzduotis </b><br>';

$r1 = rand(0, 2);
$r2 = rand(0, 2);
$r3 = rand(0, 2);
$r4 = rand(0, 2);

echo "Skaciai: $r1 $r2 $r3 $r4";
echo "<br>";
$nuliu = 0;
$vienetu = 0;
$dvejetu = 0;


if ($r1 = 0 || $r2 = 0 || $r3 = 0 || $r4 = 0) {
    $nuliu++;
}
    else if ($r1 = 1 || $r2 = 1 || $r3 = 1 || $r4 = 1) {
        $vienetu++;
    }
    else if ($r1 = 2 || $r2 = 2 || $r3 = 2 || $r4 = 2) {
        $dvejetu++;
    } 


echo "Is viso nuliu: $nuliu <br>";
echo "Is viso vienetu: $vienetu <br>";   
echo "Is viso dvejetu: $dvejetu <br>";   

echo '<br><b> 6 Uzduotis </b><br>';

$skaicius = rand(1, 6);
echo "<h$skaicius>$skaicius</h$skaicius>";
echo "<br>";


echo '<br><b> 7 Uzduotis </b><br>';

for ($i = 0; $i < 3; $i++) {
    $x = rand(-10, 10);
    if ($x < 0 ) {
        echo "<font color=green>$x <br>";
    } else if ($x > 0) {
        echo "<font color=blue>$x <br>";
    } else echo "<font color=red>$x <br>";
}
echo "<font color=black><br>";


echo '<br><b> 8 Uzduotis </b><br>';

$zvakes = rand (5, 3000);

function zvakes($kiekZvakiu) {
    $zvKaina = 1;
    $kaina = $kiekZvakiu * $zvKaina;
    $naujaKaina = 0;
    if ($kaina > 2000 ) {
      $naujaKaina = round($kaina * 0.96);
      echo "Kaina su 4% nuolaida: $naujaKaina eur uz $kiekZvakiu zvakes";
    } else if ($kaina > 1000) {
      $naujaKaina = round($kaina * 0.97);
        echo "Kaina su 3% nuolaida: $naujaKaina eur uz $kiekZvakiu zvakes";
        
    } else return "Kaina: $kaina uz $kiekZvakiu zvakes";
}
echo zvakes($zvakes);
echo "<br>";


echo '<br><b> 9 Uzduotis </b><br>';

$x1 = rand(0, 100);
$x2 = rand(0, 100);
$x3 = rand(0, 100);
echo "Skaiciai: $x1 $x2 $x3 <br>";

$vidurkis = ($x1 + $x2 + $x3) / 3;
echo round($vidurkis);

if () {}