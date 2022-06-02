<?php

require __DIR__ . '/Pinigine.php';

$naujaPinigine = new Pinigine;

$naujaPinigine->idet(88);
$naujaPinigine->idet(1,5); // kaip padaryt kad ir centus paskaiciuotu?
$naujaPinigine->showMoney();
$naujaPinigine->skaiciuoti();