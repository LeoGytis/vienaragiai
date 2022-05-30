<?php
require __DIR__ .'./header.php';

$klientai = json_decode(file_get_contents(__DIR__.'/saskaitos.json'), true);
$esamasKlientas = $klientai[$_GET['id']];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    print_r($_POST['suma']);

    foreach ($klientai as $key => $arr) {
        // echo $key;
        // echo '--------';
        // echo $_GET['id'];
        if ($key == $_GET['id']) {
            echo 'LABAS';
            echo '--------<br>';
            $arr['lesos'] = strval(intval($arr['lesos']) + intval($_POST['suma']));   // Priskiriama nauja suma
            // echo $naujaSuma['lesos'];
            // echo print_r($naujaSuma);
            // // echo gettype($naujaSuma['lesos']);
            // // echo gettype(strval($naujaSuma['lesos']));
            // array_replace($arr, $naujaSuma);
            // // $arr['lesos'] = $naujaSuma['lesos'];
            echo print_r($arr);
             
        }
    }

    // print_r($esamasKlientas[$_GET['id']]);
    // print_r($klientai);

    file_put_contents(__DIR__.'/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
} 
// echo $esamasKlientas;

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
      
        echo '<pre>';
        print_r($esamasKlientas);   
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
        <button type="submit" class="btn">PRIDĖTI</button>
    </form>
        <body style="background: goldenrod;">
        <?php
    }
    ?>
    </div>
</body>
</html>