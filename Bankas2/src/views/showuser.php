<?php
require __DIR__ . '/top.php';

?>
<div class="showuser-column">
    <div class="showuser">
        <?php
        echo $data['name'] . '<br>';
        echo $data['surname'] . '<br>';
        echo substr($data['account_nr'], 0, 4) . ' ' . substr($data['account_nr'], 4, 4) . ' ' . substr($data['account_nr'], 8, 4) . ' ' . substr($data['account_nr'], 12, 4) . ' ' . substr($data['account_nr'], 16, 4) . ' ' . '<br>';
        echo $data['social_id'] . '<br><br><br><br><br>';
        echo '<a href="/update/' . $data['id'] . '">Redaguoti duomenis</a><br>';
        echo '<a href="/delete/' . $data['id'] . '">Ištrinti klientą</a><br>';
        ?>
    </div>
    <div class="funds-edit">
        <div class="funds">
            <?php
            echo 'Lėšos: ' . $data['funds'] . '€' . '<br><br><br><br>';
            ?>
        </div>
        <form action="" method="post">
            <div class="showclient-row">
                <label class="label">Pasirnkit valiuta</label>
                <select name="currency">
                    <option value="EGP">Egiptian Pound</option>
                    <option value="GEL">GEL</option>
                    <option value="ZMW">ZMW</option>
                    <option value="RON">RON</option>
                </select>
            </div>
            <div>
                <button type="submit" class="showuser-btn">Pasirinkti valiutą</button>
            </div>
    </div>
    </form>
</div>
</div>


</div>

<?php
require __DIR__ . '/bottom.php';
