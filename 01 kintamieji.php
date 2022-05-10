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

$c2 = 0;

if ($r1 == 2) {
    $c2++;
}
if ($r2 == 2) {
    $c2++;
}
if ($r3 == 2) {
    $c2++;
}
if ($r4 == 2) {
    $c2++;
}
$c1 = $r1 + $r2 + $r3 + $r4 - ($c2 * 2);
$c0 = 4 - $c1 - $c2;

echo "Is viso nuliu: $c0 <br>";
echo "Is viso vienetu: $c1 <br>";   
echo "Is viso dvejetu: $c2 <br>";   

echo '<br><b> 6 Uzduotis </b><br>';

$skaicius = rand(1, 6);
echo "<h$skaicius>$skaicius</h$skaicius>";


echo '<b> 7 Uzduotis </b><br>';

for ($i = 0; $i < 3; $i++) {
    $x = rand(-10, 10);
    if ($x < 0 ) {
        echo "<font color=green>$x <br>";
    } else if ($x > 0) {
        echo "<font color=blue>$x <br>";
    } else echo "<font color=red>$x <br>";
}
echo "<font color=black>";


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
// $x1 = 10;
// $x2 = 30;
// $x3 = 95;
echo "Skaiciai: $x1 $x2 $x3 <br>";

$vidurkis = ($x1 + $x2 + $x3) / 3;
echo 'Vidurkis: '. round($vidurkis);
echo "<br>";

$i9 = 0;
$x11 = 0;
$x22 = 0;
$x33 = 0;

if (10 <= $x1 && $x1 <= 90) {
    $x11 = $x1;
    $i9++;
}
if (10 <= $x2 && $x2 <= 90) {
    $x22 = $x2;
    $i9++;
}
if (10 <= $x3 && $x3 <= 90) {
    $x33 = $x3;
    $i9++;
}

$vidGeras = ($x11 + $x22 + $x33) / $i9;
echo 'Vidurkio vidurkis: '. round($vidGeras);
echo "<br>";

echo '<br><b> 10 Uzduotis </b><br>';

$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$extraSec = rand(0, 300); // 240sec = 4
$extraMin = round($extraSec / 60);

echo 'Laikas: '. $valandos. 'h. '. $minutes. 'min. '. $sekundes. 'sec.'. '<br>';
echo 'Pridedamos sekundes: '. $extraSec. 'sec. = '. $extraMin. ' min.';

if ($sekundes + $extraSec > 59) {
    $minutes += round($extraSec / 60);
    $sekundes += $sekundes % 60;
}
if ($minutes + $extraMin > 59) {
    $valandos += 1;
}


$naujosMinutes = $minutes + $extraMin;
$naujosSekundes = 


$naujasLaikas = $minutes + round($extraSec / 30);
