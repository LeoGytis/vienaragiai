<?php
// print_r($_SERVER);
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $color = 'green';
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $color = 'yellow';
    header('Location: http://localhost/vienaragiai/ND/12-WEB-mechanika/06-uzduotis.php?');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 UZDUOTIS</title>
</head>
<body style="background-color: <?php echo $color?>;">
    <form action="" method="get">
    <button type="submit">Get ZALIAS</button>
    </form><br>
    <form action="" method="post">
    <button type="submit">POST GELTONAS</button>
    </form><br>
</body>
</html>

<!-- Padarykite puslapį su dviem mygtukais.
 Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. 
 Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, 
 nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir 
 geltonai- kai iš POST. -->

 <!-- Pakartokite 6 uždavinį.
  Papildykite jį kodu, 
  kuris naršyklę po POST metodo peradresuotų 
  tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->