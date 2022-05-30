<?php
require __DIR__ .'./header.php'; 
$klientai = json_decode(file_get_contents(__DIR__.'/saskaitos.json'), true);
echo '<pre>';
// print_r($klientai);
// echo $_POST['id'];
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    unset($klientai[$_POST['id']]); 
    file_put_contents(__DIR__.'/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
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
    <title>SĄRAŠAS</title>
</head>
<body>
    <div class="sas-column" style="color: white;">
            <?php 
            foreach($klientai as $key => $arr) {
                echo '<div class="klientas">';
                // print_r($arr);
                // echo $key;
                    echo $arr['vardas']; echo '<br>';
                    echo $arr['pavarde']; echo '<br>';
                    echo $arr['saskaita']; echo '<br>';
                    echo $arr['askodas']; echo '<br>';
                    echo '<form action="" method="post">';
                        echo '<input type="hidden" name="id" value=' . $key . '>';
                        echo '<button type="submit class="sas-btn">ISTRINTI</button>';
                    echo '</form>';
                    echo '<a href="http://localhost/vienaragiai/Bankas/prideti.php?id=' . $key . '">Pridėti lėšų</a><br>';
                    echo '<a href="http://localhost/vienaragiai/Bankas/nuskaiciuoti.php?id=' . $key . '">Nuskaičiuoti lėšos</a><br>';
                    
                echo '<div>';
            }
            ?>
    </div>
    <!-- <div style="color: white;">
        <?php echo '<pre>';
        print_r($klientai);
        ?>
    </div> -->
</body>
</html>