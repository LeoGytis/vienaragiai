<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if (($_GET['color'] ?? 0) == 1) {    // ?? - uzdeda default 0
        ?>
        <body style="background: coral;">
        <?php
    }
    ?>
<body style="background-color: black; color:white;">
    <h1>12 - WEB Mechanika</h1>
    <a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/01-uzduotis.php">1 UZDUOTIS A</a><br>
    <a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/01-uzduotis.php?color=1">1 UZDUOTIS B</a><br>
</body>
</html>


<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save.
 Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų
   perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip,
    kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, 
    o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->
