<?php
require __DIR__ . '/top.php';

?>


<div class="addclient-column">
    <div class="client">
        <?php
        echo $data['name'] . '<br>';
        echo $data['surname'] . '<br>';
        echo substr($data['account_nr'], 0, 4) . ' ' . substr($data['account_nr'], 4, 4) . ' ' . substr($data['account_nr'], 8, 4) . ' ' . substr($data['account_nr'], 12, 4) . ' ' . substr($data['account_nr'], 16, 4) . ' ' . '<br>';
        echo $data['social_id'] . '<br><br>';
        echo 'Lėšos: ' . $data['funds'] . '€' . '<br><br><br><br>';
        echo '<a href="/update/' . $data['id'] . '">Redaguoti duomenis</a><br><br>';
        echo '<a href="/delete/' . $data['id'] . '">Ištrinti klientą</a><br><br>';
        require __DIR__ . '/logout.php';
        ?>
    </div>
</div>

<?php
require __DIR__ . '/messages.php';
require __DIR__ . '/bottom.php';
