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
                    header('Location: http://localhost/vienaragiai/Bankas/nuskaiciuoti.php?id=' . $_GET['id']);
                    die;
                } 
                else echo 'NEGALI BŪTI MINUSINĖ SUMA!';
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
    <link rel="stylesheet" href="./css/sarasas.css">
    <title>PRIDETI</title>
</head>

<body>
    <div class="sas-column" style="color: white;">
    <?php
    if (isset($_GET['id'])) {
        // echo '<pre>';
        // print_r($esamasKlientas);   
        echo '<div class="klientas">';
        foreach($esamasKlientas as $key => $value) {
            if ($key == 'vardas') {
                echo 'Vardas: ';
                echo $value; echo '<br>';
            }
            if ($key == 'pavarde') {
                echo 'Pavarde: ';
                echo $value; echo '<br>';
            }
            if ($key == 'lesos') {
                echo 'Sąskaitos likutis: ';
                echo $value; echo '<br>';
            }  
            
        }
        echo '<div>';
    ?>
    <form action="" method="post" class="form" > 
        <label class="label">Pirdėti lėšų</label>
        <input type="text" name="suma" class="input" required>   
        <button type="submit" class="btn">NUSKAIČIUOTI</button>
    </form>
        <body style="background: goldenrod;">
        <?php
    }
    ?>
    </div>
</body>
</html>