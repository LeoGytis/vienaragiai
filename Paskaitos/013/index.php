<?php

define('KYE', 1);

echo __DIR__;

echo KYE;

require __DIR__ .'/kitas/vienas.php';        // reikalauja failo ir jei nera ismeta error (naudoti sita)

include_once __DIR__ .'/kitas/vienas.php';   // includina viena karta bet nereiktu naudoti
include __DIR__ .'/kitas/vienas.php';
require __DIR__ .'/dar-kitas/du.php';

$data = require __DIR__.'/data.php';

print_r($data);
