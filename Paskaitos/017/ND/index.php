<?php

require __DIR__ . '/Tenisininkas.php';

echo '<pre>';

$t1 = new Tenisininkas('Petras');
$t2 = new Tenisininkas('Marija');

Tenisininkas::zaidimoPradzia();

print_r($t1);
print_r($t2);

// $t1->perduotiKamuoliuka();

echo '<h1>PERDAVIMAS!</h1>';

print_r($t1);
print_r($t2);