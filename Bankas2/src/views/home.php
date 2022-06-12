<?php
require __DIR__ . '/top.php';

?>
<div class="list-column">
    <?php
    // Surusiuoti sarasa pagal pavarde
    function sortBySurname($a, $b)
    {
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
        echo 'Lėšos: ' . $arr['lesos'] . '€' . '<br><br><br>';
        echo '<a href="/showuser/' . $arr['id'] . '">Pasirinkti klientą</a><br><br>';
        echo '</div>';
    }
    ?>


    <?php
    require __DIR__ . '/bottom.php';
