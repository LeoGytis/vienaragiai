<?php
echo "================= 1 UZDUOTIS =================<br>";
// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas
// į h1 tagą
function uzduotis1($t) {
    echo "<h>$tekstas</h>";
}

uzduotis1('Sveikas atvykes pas funkcijas!');

echo "================= 2 UZDUOTIS =================<br>";
// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
// įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją
// remkitės pirmame uždavinyje parašytą funkciją;

function uzduotis2($tekstas, $tag = 1) {
    echo "<h$tag>$tekstas</h$tag>";
}

uzduotis2('Antra uzduotis', 3);

echo "================= 3 UZDUOTIS =================<br>";
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
echo "<br>";

function h1($m) {
    print_r($m);
    echo "<br>";

    return '<h1 style="display: inline;">' . $m[0] . '</h1>';
}