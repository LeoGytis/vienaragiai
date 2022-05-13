<?php 

echo "================= 1 UZDUOTIS =================<br>";

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš
// 5 elementų su reikšmėmis nuo 5 iki 25.


$newA = [];

for ($i = 0; $i < 10; $i++) {
    
    $row = [];

    for ($k = 0; $k < 5; $k++) {
        $row[] = rand(5, 25);
    }

    $newA[] = $row;
}
echo "<pre>";
// print_r($newA);

echo "================= 2 UZDUOTIS =================<br>";
echo "================= A UZDUOTIS =================<br>";
// Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$kiek = 0;

foreach($newA as $row) {
    foreach ($row as $key) {
        if($key > 10) {
            $kiek++;
        }
    }  
}

echo $kiek;

echo "<br>================= B UZDUOTIS =================<br>";
// Raskite didžiausio elemento reikšmę;

$max = 0;

foreach($newA as $row) {
    foreach ($row as $key) {
        if($max < $key) {
            $max = $key;
        }
    }  
}

echo $max;

echo "<br>================= C UZDUOTIS =================<br>";
// Suskaičiuokite kiekvieno antro lygio masyvų su vienodais
// indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$newA2 = [];

foreach($newA as $row) {
    
    for ($k = 0; $k < 4; $k++) {
        if (!array_key_exists($k, $newA2)) {
            $newA2[] = 0;
        }
        $newA2[$k] += $row[$k];
    }

    // foreach ($row as $key => $value) { // KITAS CIKLAS TAM PACIAM REIKALUI
    //     $newA2[$key] += $value;      
    // } 
}

print_r($newA2);

echo "<br>================= D UZDUOTIS =================<br>";
// Visus masyvus “pailginkite” iki 7 elementų

foreach($newA as $row => $key) {

    // $row[] = rand(5, 25); // ir tada naudoti & reference
    // $row[] = rand(5, 25);

    $newA[$row][] = rand(5, 25);
    $newA[$row][] = rand(5, 25);

}

// print_r($newA);

echo "<br>================= E UZDUOTIS =================<br>";
// Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą
// atskirai ir sumas panaudokite kaip reikšmes sukuriant naują
// masyvą. 
// T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio
// masyvo, turinčio indeksą 0 dideliame masyve, visų elementų
// sumai

// $sum = 0;

foreach($newA as $row) {
    $newAE[] = array_sum($row);
}
print_r($newAE);

echo "<br>================= 3 UZDUOTIS =================<br>";

// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi
// būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų
// reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro
// lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).


for ($i3 = 0; $i3 < 10; $i3++) {

    $row = [];
    $kiekis = rand(2, 20);
    
    for ($k3 = 0; $k3 <= $kiekis; $k3++) {
        $row[] = chr(rand(65, 90));
        sort($row);
    }
    $newA3[] = $row;    
}

// print_r($newA3);

echo "<br>================= 4 UZDUOTIS =================<br>";
// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai
// kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną
// “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

foreach($newA3 as $row) {
    
    echo "Kiek elementu masyve: " . count($row) . "<br>";  
    if (count($row)) {

    }

    // print_r($row);  

}

print_r(sort($row));