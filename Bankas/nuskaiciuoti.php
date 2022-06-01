<?php

    $klientai = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true);

    if (isset($_GET['id'])) {
        $esamasKlientas = $klientai[$_GET['id']];       
    } 

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($klientai as $key => $arr) {
            if ($key == $_GET['id']) {                  // Tikrina ir suranda areju pagal duota ID
                $arr['lesos'] = strval(intval($arr['lesos']) - intval($_POST['suma']));   // Priskiriama nauja suma
                if ($arr['lesos'] >= 0) {
                    $klientai[$_GET['id']] = $arr; // Priskirti klientui su ID nauja arreju su nauja ivesta suma;
                    file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
                    header('Location: http://localhost/vienaragiai/Bankas/nuskaiciuoti.php?id=' . $_GET['id'] . '&msg=1');
                    die;
                } 
                else 
                header('Location: http://localhost/vienaragiai/Bankas/nuskaiciuoti.php?id=' . $_GET['id'] .'&msg=2');
                die;
            }
        }
    }
    require __DIR__ .'./header.php';
?>
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
        }
        else echo 'Prašome pasirinkti klientą iš sąskaitų sąrašo.';
    ?>
    <form action="" method="post" class="funds-form" > 
        <input type="text" name="suma" class="funds-input" required>   
        <button type="submit" class="funds-btn">Nuskaičiuoti lėšas</button>
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