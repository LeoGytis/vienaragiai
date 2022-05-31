<?php
    require __DIR__ .'./header.php'; // KUR SITA KISTI ?
    $klientai = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true);

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($klientai as $key => $arr) {
            if ($key == $_GET['id']) {                  // Tikrina ir suranda duoto puslapio ID
                $arr['lesos'] = strval(intval($arr['lesos']) + intval($_POST['suma']));   // Priskiriama nauja suma
                $klientai[$_GET['id']] = $arr; // Priskirti klientui su ID nauja arreju su nauja ivesta suma;
            }
        }
        file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
        header('Location: http://localhost/vienaragiai/Bankas/prideti.php?id=' . $_GET['id'].'&msg=1');
        die;
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
    <title>Pridėti lėšas</title>
</head>

<body>
    <div class="funds-column">
        <?php
        if (isset($_GET['id'])) {
            echo '<div class="funds-client">';
            foreach($klientai[$_GET['id']] as $key => $value) {
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
        } else echo 'Prašome pasirinkti klientą iš sąskaitų sąrašo.';
        ?>
        <form action="" method="post" class="funds-form" > 
            <input type="text" name="suma" class="input" required>   
            <button type="submit" class="btn">Pridėti lėšų</button>
        </form>
            <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 1) echo '<br>Sąskaita buvo papildyta.';
        }
        ?>
        </div>
</body>
</html>