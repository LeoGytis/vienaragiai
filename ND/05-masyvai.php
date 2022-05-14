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
// print_r($newAE);

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


sort($newA3);


// foreach($newA3 as $key => $row) {    // ?????????????????????????????? usort()

//     foreach ($row as $key2 => $letter) {
//         if ($letter === 'K') {

//         }
//     }
// }

// print_r($newA3);

echo "<br>================= 5 UZDUOTIS =================<br>";
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra
// masyvas [user_id => xxx, place_in_row => xxx] user_id
// atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis
// skaičius nuo 0 iki 100.

for ($i5 = 0; $i5 < 10; $i5++) {

    $row5['id'] = rand(10000, 99999);
    $row5['place'] = rand(1, 100);

    $newA5[] = $row5;

}

// print_r($newA5);

echo "<br>================= 6 UZDUOTIS =================<br>";
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka.

sort($newA5);
// print_r($newA5);

// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka

function sortByPlace($a, $b) {
    $a = $a['place'];
    $b = $b['place'];

    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
}

usort($newA5, 'sortByPlace');

// print_r($newA5);

echo "<br>================= 7 UZDUOTIS =================<br>";
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus:
// name ir surname. Elementus užpildykite stringais iš atsitiktinai
// sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // 0-9 istryniau
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

foreach ($newA5 as $key => $row5) {
    $row5['name'] = generateRandomString(5);
    $row5['surname'] = generateRandomString(8);
    $newA5[$key] = $row5;
}

// print_r($newA5);

echo "<br>================= 8 UZDUOTIS =================<br>";
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal
// taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą.

// Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes
// užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte
// reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

for ($i8 = 0; $i8 < 10; $i8++) {

    $row8 = [];
    $x8 = rand(0, 5);

    if ($x8 == 0) {
        $newA8[] = 99;
        continue;
    }
    else {
        for ($k8 = 0; $k8 < $x8; $k8++) {
            $row8[] = rand(0, 10);
        } 
    }
    $newA8[] = $row8;
}

// print_r($newA8);

echo "<br>================= 9 UZDUOTIS =================<br>";
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
// masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba
// jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

$sum9 = 0;
$newA9 = [];

foreach($newA8 as $row) {
    if (is_array($row)) {
        echo "AREJAUS SUMA: " . array_sum($row) . "<br>";
        $sum9 += array_sum($row);
        array_push($newA9, array_sum($row));
    } 
        else {
            $sum9 += $row;
            $newA9[] = $row;
            echo "Elementas  =: " . $row . "<br>";
        }

    // echo "<br>";
    // print_r($row); 
} 

echo "<br>Visu elementu ir areju suma: " . $sum9 . "<br>";
sort($newA9);
print_r($newA9);

echo "<br>================= 10 UZDUOTIS =================<br>";

// Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
// Antro lygio masyvų reikšmės masyvai su dviem elementais value ir
// color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡,
// o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX.
// Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo
// reikšmės nuspalvintos spalva color.
