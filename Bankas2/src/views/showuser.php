<?php
require __DIR__ . '/top.php';

// echo '<pre>';
// print_r($data);
?>

<div class="addclient-column">
    <div class="client">
        <?php
        echo $data['vardas'] . '<br>';
        echo $data['pavarde'] . '<br>';
        echo substr($data['saskaita'], 0, 4) . ' ' . substr($data['saskaita'], 4, 4) . ' ' . substr($data['saskaita'], 8, 4) . ' ' . substr($data['saskaita'], 12, 4) . ' ' . substr($data['saskaita'], 16, 4) . ' ' . '<br>';
        echo $data['askodas'] . '<br><br>';
        echo 'Lėšos: ' . $data['lesos'] . '€' . '<br><br>';
        // echo '<a href="http://localhost/vienaragiai/Bankas/addfunds.php?id=' . $key . '">Pridėti lėšas</a><br>';
        // echo '<a href="http://localhost/vienaragiai/Bankas/deductfunds.php?id=' . $key . '">Nuskaičiuoti lėšas</a><br><br>';
        // echo '<form action="" method="post">';
        // echo '<input type="hidden" name="id" value=' . $key . '>';
        // echo '<button type="submit" class="list-btn">ISTRINTI</button><br><br>';
        // echo '</form>';

        ?>
    </div>
</div>

<?php
require __DIR__ . '/bottom.php';
