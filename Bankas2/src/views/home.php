<?php
require __DIR__ . '/top.php';
?>
<div class="list-column">
    <?php
    // Surusiuoti sarasa pagal pavarde
    function sortBySurname($a, $b)
    {
        $a = $a['surname'];
        $b = $b['surname'];
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }
    uasort($data, 'sortBySurname'); //uasort nepameta indexo

    foreach ($data as $key => $arr) {
        echo '<div class="client">';
        echo $arr['name'] . '<br>';
        echo $arr['surname'] . '<br>';
        echo substr($arr['account_nr'], 0, 4) . ' ' . substr($arr['account_nr'], 4, 4) . ' ' . substr($arr['account_nr'], 8, 4) . ' ' . substr($arr['account_nr'], 12, 4) . ' ' . substr($arr['account_nr'], 16, 4) . ' ' . '<br>';
        echo $arr['social_id'] . '<br><br>';
        echo 'Lėšos: ' . $arr['funds'] . '€' . '<br><br><br>';
        echo '<a class="list-btn"href="/showuser/' . $arr['id'] . '">Pasirinkti klientą</a><br><br>';
        echo '</div>';
    }
    ?>
</div>

<?php
require __DIR__ . '/bottom.php';
