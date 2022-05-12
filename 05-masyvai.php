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

$newA2 = [0, 0, 0, 0]; // Ar eina padaryti nesukuriant su nuliais?

foreach($newA as $row) {
    
    for ($k = 0; $k < 4; $k++) {
        $newA2[$k] += $row[$k];
    }

    // foreach ($row as $key => $value) {
    //     $newA2[$key] += $value;      
    // } 
}

// print_r($newA2);

echo "<br>================= D UZDUOTIS =================<br>";
// Visus masyvus “pailginkite” iki 7 elementų

foreach($newA as $row) {
    for ($m = 0; $m < 2; $m++) {
        $row[] = rand(5, 25);
    }  
    $newA[] = $row;
}

print_r($newA);

