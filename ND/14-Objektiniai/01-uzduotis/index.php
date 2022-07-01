<?php

require __DIR__ . '/Kibiras1.php';

$viedras = new Kibiras1();

var_dump($viedras);

echo '<br>--------<br>';
echo $viedras->akmenys;

echo '<br>--------<br>';
$viedras->akmenys = 22;
echo $viedras->akmenys;

echo '<br>--------<br>';
$viedras->prideti1Akmeni();
var_dump($viedras);

echo '<br>--------<br>';
$viedras->pridetiDaugAkmenu(5);
var_dump($viedras);

echo '<br>--------<br>';
echo $viedras->kiekPririnktaAkmenu();
