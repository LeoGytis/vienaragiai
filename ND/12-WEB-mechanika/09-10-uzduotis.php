<?php
// echo '<pre><br>';
// print_r($_SERVER);
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $color = 'yellowgreen';
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    print_r($_POST);
    $color = 'skyblue';

    echo '<h2>Kiek varneliu buvo pazymeta: ' . count($_POST) - 1 . '</h2><br>';
    echo '<h3>Kiek raidziu sugeneruota: ' . $_POST['kiekSugeneruota'] . '</h3>';
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $color?>;">
    <form action="" method="post">
    <?php
    $r = rand(3, 10);
    $abc = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J']; 
    for ($i = 0; $i < $r; $i++) {
        echo '<input type="checkbox" name="' . $i . '" value=1><label>' . $abc[$i] . '</label><br>';
    }
    echo '<input type="hidden" name="kiekSugeneruota" value=' . $r . '>';
    ?>
    <button type="submit">SKAICIUOTI</button>
    </form><br>
</body>
</html>

<!-- Padarykite juodą puslapį, kuriame būtų POST forma, 
mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 
Padarykite taip, kad paspaudus mygtuką, 
fono spalva pasikeistų į baltą, 
forma išnyktų ir atsirastų skaičius, 
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
