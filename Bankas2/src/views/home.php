<?php
require __DIR__ . '/top.php';

// require __DIR__ . '/../../vendor/autoload.php';

// echo '<pre>';
// print_r($data);
?>
<h1>Sweet</h1>
<div class="list-column">
    <?php
    function sortBySurname($a, $b)
    { // Surusiuoti sarasa pagal pavarde
        $a = $a['pavarde'];
        $b = $b['pavarde'];
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }
    uasort($data, 'sortBySurname'); //uasort nepameta indexo

    foreach ($data as $key => $arr) {
        echo '<div class="client">';
        echo $arr['vardas'] . '<br>';
        echo $arr['pavarde'] . '<br>';
        echo substr($arr['saskaita'], 0, 4) . ' ' . substr($arr['saskaita'], 4, 4) . ' ' . substr($arr['saskaita'], 8, 4) . ' ' . substr($arr['saskaita'], 12, 4) . ' ' . substr($arr['saskaita'], 16, 4) . ' ' . '<br>';
        echo $arr['askodas'] . '<br><br>';
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


    <?php
    require __DIR__ . '/bottom.php';
