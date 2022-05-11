<?php
echo "<br>====== 1 UZDUOTIS ====== <br>";

$naujasM = [];

for ($i1 = 0; $i1 <= 29; $i1++) {
    $naujasM[] = rand(5, 25);
}

print_r($naujasM);

echo "<br>====== 2 UZDUOTIS ====== <br>";

echo "<br>";

$reiksmiuKiek = 0;

foreach($naujasM as $key => $value) {
    if ($value > 10) {
        $reiksmiuKiek++;
    }
}
echo "a) Daugiau uz 10 yra: " . $reiksmiuKiek . "<br>";
echo "<br>";


$kiekMax = 0;
echo " b) Didziausia masyvo reiksme: " . max($naujasM) . "<br>";

foreach($naujasM as $key => $value) {
    if ($value === max($naujasM)) {
        echo " Indekas: " . $key . " Reiksme: " . $value;
        $kiekMax++;
    }
}

echo "<br>";
echo "<br>";

echo "c) Poriniu indeksu suma: ";

$indeksuSuma = 0; 
foreach($naujasM as $key => $value) {
    if ($key % 2 === 0) {
        $indeksuSuma += $key;
    }
}
echo $indeksuSuma;

echo "<br>";
echo "<br>";

$naujasM2 = [];

foreach($naujasM as $key => $value) {
    $reiksme = $value - $key;
    array_push($naujasM2, $reiksme);
}
echo "d) Naujas arejus atkeliavo! <br>";
print_r($naujasM2);

echo "<br>";
echo "<br>";


echo "e) Papildytas masyvas <br>";
for ($i2 = 0; $i2 < 10; $i2++) {
    array_push($naujasM, rand(5, 25));
}
print_r($naujasM);

echo "<br>";
echo "<br>";

echo "f) Porinis ir neporinis masyvai <br>";
$porinis = [];
$neporinis = [];

foreach($naujasM as $key => $value) {
    if ($key % 2 === 0) {
        $porinis[] = $value;
    } else 
        $neporinis[] = $value;
}
echo "+++ Porinis masyvas +++ <br>";
print_r($porinis);
echo "<br>+++ Neporinis masyvas +++ <br>";
print_r($neporinis);

echo "<br>";
echo "<br>";

echo "g) Nulis jeigu didesni uz 15";

foreach($porinis as $key => $value) {
    if ($key % 2 === 0 && $value > 15) {
        $porinis[$key] = 0;
    }
}

print_r($porinis);
echo "<br>";
echo "<br>";

echo "h) Pirmas maziausias indeksas kurio elemento reiksme didesne uz 10 <br>";

foreach($porinis as $key => $value) {
    if ($value > 10) {
        echo "Indeksas: " . $key;
        break;
    }
}

echo "<br>";
echo "<br>";

echo "i) Nauodjame unset() <br>";


foreach($porinis as $key => $value) {
    if ($key % 2 === 0) {
        unset($porinis[$key]);
    }
}

print_r($porinis);



