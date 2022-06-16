<?php
require __DIR__ . '/top.php';

?>
<div class="list-column">
    <div class="client">

        <?php
        echo $data['name'] . '<br>';
        echo $data['surname'] . '<br>';
        echo substr($data['account_nr'], 0, 4) . ' ' . substr($data['account_nr'], 4, 4) . ' ' . substr($data['account_nr'], 8, 4) . ' ' . substr($data['account_nr'], 12, 4) . ' ' . substr($data['account_nr'], 16, 4) . ' ' . '<br>';
        echo $data['social_id'] . '<br><br><br><br>';
        echo '<a href="/update/' . $data['id'] . '">Redaguoti duomenis</a><br><br>';
        echo '<a href="/delete/' . $data['id'] . '">Ištrinti klientą</a><br><br>';
        ?>

        <div class="funds-client">
            <?php
            echo 'Lėšos: ' . $data['funds'] . '€' . '<br><br><br><br>';
            ?>
            <form action="" method="post" class="addclient">
                <div class="addclient-row">
                    <label class="label">Pasirnkit valiuta</label>
                    <select name="currency">
                        <option value="EGP">Egiptian Pound</option>
                        <option value="GEL">GEL</option>
                        <option value="ZMW">ZMW</option>
                        <option value="RON">RON</option>
                    </select>
                </div>
                <div class="addclient-row">
                    <button type="submit" class="addclient-btn">Pasirinkti valiutą</button>
                </div>
            </form>
        </div>
    </div>


</div>

<?php
require __DIR__ . '/bottom.php';
