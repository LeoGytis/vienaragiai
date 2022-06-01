<?php

    $klientai = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true);
    // echo '<pre>';
    // print_r($klientai);
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($klientai[$_POST['id']]['lesos'] <= 0) {    // Tikrina ar saskaita tuscia
            unset($klientai[$_POST['id']]); 
            file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
        }
        else echo 'Kliento ištrinti negalima, nes sąskaita nėra tusčia';
    }

    require __DIR__ .'./header.php'; 
?>
    <div class="list-column">
            <?php 
            function sortBySurname($a, $b) { // Surusiuoti sarasa pagal pavarde
                $a = $a['pavarde'];
                $b = $b['pavarde'];
                if ($a == $b) return 0;
                return ($a < $b) ? -1 : 1;
            }
            uasort($klientai, 'sortBySurname'); //uasort nepameta indexo

            foreach($klientai as $key => $arr) {
                echo '<div class="client">';
                echo $arr['vardas'] . '<br>';
                echo $arr['pavarde'] . '<br>';
                // echo $arr['saskaita'] . '<br>';
                echo substr($arr['saskaita'], 0, 4) . ' ' . substr($arr['saskaita'], 4, 4) . ' ' . substr($arr['saskaita'], 8, 4) . ' ' . substr($arr['saskaita'], 12, 4) . ' ' . substr($arr['saskaita'], 16, 4) . ' '.'<br>';
                echo $arr['askodas']. '<br><br>';
                echo 'Lėšos: ' . $arr['lesos'] . '€' . '<br><br>';
                echo '<a href="http://localhost/vienaragiai/Bankas/addfunds.php?id=' . $key . '">Pridėti lėšas</a><br>';
                echo '<a href="http://localhost/vienaragiai/Bankas/deductfunds.php?id=' . $key . '">Nuskaičiuoti lėšas</a><br><br>';
                echo '<form action="" method="post">';
                    echo '<input type="hidden" name="id" value=' . $key . '>';
                    echo '<button type="submit" class="list-btn">IŠTRINTI</button><br><br>';
                echo '</form>';
                echo '</div>';
            }
            ?>
    </div>
</body>
</html>