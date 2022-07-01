<?php

require __DIR__ . '/Pinigine.php';

$naujaPinigine = new Pinigine;

$naujaPinigine->idet(88);
$naujaPinigine->idet(1.5);
$naujaPinigine->idet(1.8);

$naujaPinigine->showMoney();
$naujaPinigine->skaiciuoti();
