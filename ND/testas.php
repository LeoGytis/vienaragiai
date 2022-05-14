<?php
echo "Testas prasideda <br><br>";

$saugiklis = 100;
$ziurkes = 0;
$ratai = 0;

do {
    if (!--$saugiklis){
        break;
    }

    $ziurkes += rand(3,5);
    $ratai++;
}
        
while ($ziurkes < 20);

echo "Apibego ratu: ". $ratai. " ir pagavo ziurkiu: ". $ziurkes;