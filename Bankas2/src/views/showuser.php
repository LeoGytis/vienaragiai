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
        echo '<a href="/update/' . $data['id'] . '">Redaguoti duomenis</a><br><br>';
        ?>
    </div>
</div>

<?php
require __DIR__ . '/bottom.php';
