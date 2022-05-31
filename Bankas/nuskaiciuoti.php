<?php
require __DIR__ .'./header.php';

$klientai = json_decode(file_get_contents(__DIR__.'/saskaitos.json'), true);
$esamasKlientas = $klientai[$_GET['id']];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($klientai as $key => $arr) {
            if ($key == $_GET['id']) {                  // Tikrina ir suranda areju pagal duota ID
                $arr['lesos'] = strval(intval($arr['lesos']) - intval($_POST['suma']));   // Priskiriama nauja suma
                if ($arr['lesos'] >= 0) {
                    $klientai[$_GET['id']] = $arr; // Priskirti klientui su ID nauja arreju su nauja ivesta suma;
                    file_put_contents(__DIR__.'/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
                    header('Location: http://localhost/vienaragiai/Bankas/nuskaiciuoti.php?id=' . $_GET['id'] . '&msg=1');
                    die;
                } 
                else 
                header('Location: http://localhost/vienaragiai/Bankas/nuskaiciuoti.php?id=' . $_GET['id'] .'&msg=2');
                die;
            }
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/funds.css">
    <title>Nuskaičiuoti lėšas</title>
</head>

<body>
    <div class="funds-column">
    <?php
    if (isset($_GET['id'])) {
        echo '<div class="funds-client">';
        foreach($esamasKlientas as $key => $value) {
            if ($key == 'vardas') {
                echo $value . '<br>';
            }
            if ($key == 'pavarde') {
                echo $value . '<br><br>';
            }
            if ($key == 'lesos') {
                echo $value . '€';
            }   
        }
        echo '</div>';
    }
    ?>
    <form action="" method="post" class="funds-form" > 
        <input type="text" name="suma" class="input" required>   
        <button type="submit" class="btn">Nuskaičiuoti lėšas</button>
    </form>
        <?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 1) echo '<br>Iš sąskaitos buvo nuskaičiuota.';
        if ($_GET['msg'] == 2) echo '<br>Sąskaitos nepakanka pinigams nuskaičiuoti.';
    }
    ?>
    </div>
</body>
</html>