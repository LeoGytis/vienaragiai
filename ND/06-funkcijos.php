<?php
echo "================= 1 UZDUOTIS =================<br>";
// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas
// į h1 tagą
function uzduotis1($t) {
    echo "<h>$t</h>";
}

uzduotis1('Sveikas atvykes pas funkcijas!');

echo "<br>================= 2 UZDUOTIS =================<br>";
// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
// įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją
// remkitės pirmame uždavinyje parašytą funkciją;

function uzduotis2($tekstas, $tag = 1) {
    echo "<h$tag>$tekstas</h$tag>";
}

uzduotis2('Antra uzduotis', 2);

echo "<br>================= 3 UZDUOTIS =================<br>";
// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus
// skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli
// skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir
// užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu
// reikia) uždavinio funkciją ir preg_replace_callback();

$randomStringas = md5(time());
echo $randomStringas;
echo "<br>";

$rez = preg_replace_callback('/[0-9]+/', 'h1', $randomStringas);

echo $rez;
echo '<br>';

function h1($m) {
    print_r($m);
    echo '<br>';


    return '<h1 style="display: inline;">' . $m[0] . '</h1>';
}

echo "<br>================= 4 UZDUOTIS =================<br>";
// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas
// dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite
// taip, kad būtų galima įvesti tik sveiką skaičių;

function isKiekDalinasi($number) {
    $kiek = 0;

    if ((int) $number == $number) {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $kiek++; 
                // echo $number . " dalinasi is " . $i . "    ". $number % $i;
                // echo '<br>';
            }
        }
    } else return false; // 'Skaicius nera sveikas';

    // echo "Skaicius: " . $number . " gali buti dalinamas kartu: " . $kiek;
    // echo '<br>';

    return $kiek;
}

echo isKiekDalinasi(36);


echo "<br>================= 5 UZDUOTIS =================<br>";
// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
// skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį
// mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

for ($i = 0; $i < 5; $i++) {
        $newA[$i] = rand(33, 77);
}

print_r($newA);
echo '<br>';
    
function rusiuotiDaliklius($a, $b) {
    return (isKiekDalinasi($b) <=> isKiekDalinasi($a)); 
}

usort($newA, 'rusiuotiDaliklius');
print_r($newA);

echo "<br>================= 6 UZDUOTIS =================<br>";
// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
// skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo
// ištrinkite pirminius skaičius

for ($i = 0; $i < 10; $i++) {
    $newA6[$i] = rand(333, 777);
}

print_r($newA6);
echo '<br>';

$pirminiai = [];

foreach($newA6 as $key => $value){
    if (!isKiekDalinasi($value)) {
        $pirminiai[] = $value;
    }
}

print_r($pirminiai);

echo "<br>================= 7 UZDUOTIS =================<br>";
// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus
// paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis
// masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis
// masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30 kiekį kartų.
// Paskutinio masyvo paskutinis elementas yra lygus 0;

for ($i7 = 0; $i7 < rand(1, 6); $i7++) {
    $newA7[] = rand(0, 10);
}