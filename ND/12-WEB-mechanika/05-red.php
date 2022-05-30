<?php
if (isset($_GET['r'])) {
 header('Location: http://localhost/vienaragiai/ND/12-WEB-mechanika/05-blue.php');
 die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED</title>
    
</head>
<body style="background:red;">
<a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/05-red.php?r=1">BLUE</a>
</body>
</html>

<!-- Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų 
į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->