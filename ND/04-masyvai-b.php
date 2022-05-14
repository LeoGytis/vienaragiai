<?php 

echo "====== 6 UZDUOTIS ====== <br>";
// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki
// 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y.
// neturi kartotis)

$newA1 = [];
$newA2 = [];

$saugiklis = 200;

do {
    $x = rand(1, 20);

    if (!in_array($x, $newA1)) {
        $newA1[] = $x;    
    } 
}
while (count($newA1) < 10);

do {
    $x = rand(1, 20);

    if (!in_array($x, $newA2)) {
        $newA2[] = $x;    
    } 
}
while (count($newA2) < 10);

echo "<pre>";
print_r($newA1);
print_r($newA2);

echo "<br>====== 7 UZDUOTIS ====== <br>";

$newA7 = [];

for ($i = 0; $i < count($newA1); $i++) {
    if (!in_array($newA1[$i], $newA2)) {
        $newA7[] = $newA1[$i];    
    }
}

// print_r($newA7);

echo "<br>====== 8 UZDUOTIS ====== <br>";

$newA8 = [];

for ($k = 0; $k < count($newA1); $k++) {
    if (in_array($newA1[$k], $newA2)) {
        $newA8[] = $newA1[$k];    
    }
}
// print_r($newA8);


echo "<br>====== 9 UZDUOTIS ====== <br>";

// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo
// reikšmės, o jo reikšmės būtų iš antrojo masyvo.

$newA9 = [];

for ($l = 0; $l < count($newA1); $l++) {
    $newA9[$newA1[$l]] = $newA2[$l];
}
// print_r($newA9);


echo "<br>====== 10 UZDUOTIS ====== <br>";

// Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai
// nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma.
// Penktas trečio ir ketvirto suma ir t.t.

$newA10 = [];

for ($m = 0; $m < 10; $m++) {
    if ($m < 2) {
        $newA10[] = rand(1, 10);
    } else {
    $newA10[$m] = $newA10[$m-1] + $newA10[$m-2];
    }
}

// print_r($newA10);

echo "<br>====== 11 UZDUOTIS ====== <br>";

// Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300.
// Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip,
// kad visos reikšmės masyve būtų unikalios. 

// Išrūšiuokite masyvą taip, kad jo
// didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo
// pradžios ir pabaigos reikšmės mažėtų.

//  Paskaičiuokite pirmos ir antros masyvo
// dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis,
// absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos
// nesiskirtų viena nuo kitos daugiau nei per 30)

$newA11 = [];

do {

    if (!(--$saugiklis)) {
        echo 'Saugiklis!';
        break;
    }

    $x3 = rand(1, 20);

    if (!in_array($x3, $newA11)) {
        $newA11[] = $x3;    
    } 
}
while (count($newA11) < 25);

print_r($newA11);