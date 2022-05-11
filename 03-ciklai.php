<style><?php include 'C:\xampp\htdocs\vienaragiai/03-ciklai.css'; ?></style>

<?php
echo "====== 1 UZDUOTIS ====== <br>";

for ($i = 1; $i <= 400; $i++) {
    echo '<div>*</div>';
    if ($i % 50 === 0 ) {
        echo '<br>';
    }

}

echo "<br>====== 2 UZDUOTIS ====== <br>";

for ($i2 = 0; $i2 < 300; $i2++) {
    $x = rand(0, 300);
    if ($x > 275 ) {
        echo "<div style='color: red'>".  $x. "&nbsp;</div>";
    }
    echo "<div style='color: black; background-color: white;'>".  $x. "&nbsp;</div>";
    
    if ($x > 150) {
        $didesni++;
    }
}

echo "<br>";
echo "Didesniu uz 150 yra: ". $didesni;

echo "<br>====== 3 UZDUOTIS ====== <br>";

$x3 = rand(1, rand(3000,4000));
echo "SKAICIUS X: ". $x3. "<br>";
$paskutinis = floor($x3 / 77);
echo "PASKUTINIS". $paskutinis. "<br>";


for ($i3 = 0; $i3 <= $x3; $i3++) {
    if ($i3 == $paskutinis * 77) {
        echo $i3. ".";
    } else
    if ($i3 % 77 === 0) {
        echo $i3. ", ";
    }
}

echo "<br>====== 4 UZDUOTIS ====== <br>";

$sk = 0; 

for ($i4 = 1; $i4 <= 625; $i4++) {
    echo '<div>*</div>';
    if ($i4 / 25 === $sk) {
        echo '<div class="kryzius">*</div>';
       }
    
    if ($i4 % 25 === 0 ) {
        echo '<br>';
        $sk++;
    }
   }


   echo "<br>====== 5 UZDUOTIS ====== <br>";

   echo "<br>====== 6 UZDUOTIS ====== <br>";

$saugiklis = 100;
$kiekH = 0;
$re = '/[H]{3}/m';
$eilute = '';

do {
    if (!--$saugiklis){
        break;
    }

    $moneta = rand(0, 1) ? 'H' : 'S';
    echo "Moneta: ". $moneta. " ";

    $eilute = $eilute.$moneta;
  
} while (!preg_match_all($re, $eilute, $matches, PREG_SET_ORDER, 0));

echo "<br>====== 7 UZDUOTIS ====== <br>";



$pTaskai = 0;
$kTaskai = 0;

do {
    if (!--$saugiklis){
        break;
    }
   
    $pTaskai = $pTaskai + rand(10, 20);
    $kTaskai = $kTaskai + rand(5, 25);

    
    
}
while ($pTaskai < 222 && $kTaskai < 222);

echo "Petro taskai: ". $pTaskai. "<br>";
echo "Kazio taskai: ". $kTaskai. "<br>";

$laimetojas = $pTaskai > $kTaskai ? 'Petras' : ($pTaskai < $kTaskai ? 'Kazys' : 'Lygiosios'); // JEIGU LYGIOSIOS ???
echo "Partija laimejo: ". $laimetojas;

echo "<br>====== 8 UZDUOTIS ROMBAS ====== <br>";

echo "<br>====== 10 UZDUOTIS ====== <br>";

$gylis = 0;
$smugiai = 0;

do {
    if (!--$saugiklis){
        break;
    }
    $pataike = rand(0,1);
    echo "PATAIKE: ". $pataike;
    if ($pataike === 1 ) {
    $gylis += rand(20, 30);
    }
    $smugiai++;
}
        
while ($gylis < 85);

echo "Reikejo smugiu viniai ikalti: ". $smugiai. "<br>";

echo "<br>====== 11 UZDUOTIS ====== <br>";

$stringas = '';

for ($k = 0; $k < 10; $k++) {
    $randSk = rand(1, 200);
    
    $stringas .= " " . strval($randSk);
    echo $randSk;
}
echo "<br>";
echo "Naujasis stringas: ". $stringas;