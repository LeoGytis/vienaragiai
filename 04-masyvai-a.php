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
// echo "<pre>";
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


echo "<br>====== 3 UZDUOTIS ====== <br>";

$abcArray = [];
$raideA = 0;
$raideB = 0;
$raideC = 0;
$raideD = 0;

for ($i3 = 0; $i3 < 200; $i3++) {
    $abcArray[] = chr(rand(65,68));; //random ABCD rand(65,90)) - didziosiomis raidemis. 
                                     // rand(97,122)) - mazosiomis raidemis.
}

foreach($abcArray as $key => $value) {
    if ($value  === 'A') {
        $raideA++;
    }
    if ($value  === 'B') {
        $raideB++;
    }
    if ($value  === 'C') {
        $raideC++;
    }
    if ($value  === 'D') {
        $raideD++;
    }
}

// print_r($abcArray);
echo "A: " . $raideA . " B: " . $raideB . " C: " . $raideC . " D: " . $raideD; 

echo "<br>====== 4 UZDUOTIS ====== <br>";

$newABC = [];

foreach($abcArray as $key => $value) {
    if ($value  === 'A') {
        $newABC[] = 'A';
    }  
}

foreach($abcArray as $key => $value) {
    if ($value  === 'B') {
        $newABC[] = 'B';
    }  
}
foreach($abcArray as $key => $value) {
    if ($value  === 'C') {
        $newABC[] = 'C';
    }  
}
foreach($abcArray as $key => $value) {
    if ($value  === 'D') {
        $newABC[] = 'D';
    }  
}

echo "Uzkomentuotas atsakymas";
// print_r($newABC); // sudeliotas arrejus

sort($abcArray); // sortina abeceles tvarka rsort() - sortina atvirkstine tvarka;
// print_r($abcArray);

echo "<br>====== 5 UZDUOTIS ====== <br>";

$newA1 = [];
$newA2 = [];
$newA3 = [];
$newA4 = [];

for ($i5 = 0; $i5 < 50; $i5++) {
    $newA1[] = chr(rand(65,68));; //random ABCD rand(65,90)) - didziosiomis raidemis. 
                                     // rand(97,122)) - mazosiomis raidemis.
}
for ($i52 = 0; $i52 < 50; $i52++) {
    $newA2[] = chr(rand(65,68));; //random ABCD rand(65,90)) - didziosiomis raidemis. 
                                     // rand(97,122)) - mazosiomis raidemis.
}
for ($i52 = 0; $i52 < 50; $i52++) {
    $newA3[] = chr(rand(65,68));; //random ABCD rand(65,90)) - didziosiomis raidemis. 
                                     // rand(97,122)) - mazosiomis raidemis.
}

// print_r($newA1);
// echo "<br>";
// print_r($newA2);
// echo "<br>";
// print_r($newA3);
// echo "<br>";

foreach($newA1 as $key => $value) {
    $newA4[] = $value; 
}  

foreach($newA2 as $key => $value) {
    $newA4[$key] = $newA4[$key] . $value; 
}  

foreach($newA3 as $key => $value) {
    $newA4[$key] = $newA4[$key] . $value; 
} 
sort($newA4);
// print_r($newA4);

$unikalus = 'rnesad';
$kiekUnikaliu = 0;
$kiekKombinaciju = 0;

foreach($newA4 as $key => $value) {
    if ($unikalus !== $value) {
        $kiekUnikaliu++;
    }
    $unikalus = $value;
} 
echo "Kiek unikaliu variaciju: " . $kiekUnikaliu;

echo "<pre>";

print_r(array_count_values($newA4)); // Counts all the values of an array

