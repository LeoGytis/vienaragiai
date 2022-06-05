<?php

require __DIR__ . '/Kibiras2.php';

$pirmasKibiras = new Kibiras2();
$antrasKibiras = new Kibiras2();
$treciasKibiras = new Kibiras2();


var_dump($pirmasKibiras);
var_dump($antrasKibiras);
var_dump($treciasKibiras);

$pirmasKibiras->prideti1Akmeni();
$pirmasKibiras->pridetiDaugAkmenu(4);

$antrasKibiras->prideti1Akmeni();
$antrasKibiras->pridetiDaugAkmenu(9);

$treciasKibiras->prideti1Akmeni();
$treciasKibiras->pridetiDaugAkmenu(14);

echo '<br>------------------------------<br>';
var_dump($pirmasKibiras);
var_dump($antrasKibiras);
var_dump($treciasKibiras);

echo '<br>------------------------------<br>';
Kibiras2::showAkmenys;
