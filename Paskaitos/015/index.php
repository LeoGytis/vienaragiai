<?php
// NAUDOJA PRANAS
require __DIR__ . '/Bebras.php';
//klase nera kintamasis, ji yra popieriukas
//klase nera is didziosios
//objektas is didziosios

$bebras1 = new Bebras('Jonas', [0]);
$bebras2 = new Bebras('Janina', [1,2,3]);
$bebras3 = $bebras1; // tas pats objetas
$bebras4 = clone($bebras1); // klonas bet jau kaip kitas objektas

echo '<pre>';

var_dump($bebras1);
var_dump($bebras2);
var_dump($bebras3);

echo $bebras1->tail;  //tail be dolerio zenklo
echo '<br>';
$bebras1->tail = 'Very long';
echo $bebras1->tail; 

echo $bebras1->age;  //privatus todel nerodo
$bebras1->changeAge(26); //iskviesti funkcija klaseje
$bebras1->whatIsYourAge(); //iskviesti funkcija klaseje


echo $bebras1->belenkas;  //Get metodas gauna visas reiksmes
echo $bebras1->age;  
echo $bebras1->name;  


