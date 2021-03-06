<?php
require __DIR__ . '/top.php';

$iban = 'LT' . rand(40, 60) . '10100' . rand(10000000000, 99999999999);

?>

<div class="addclient-column">
    <form action="" method="post" class="addclient">
        <div class="addclient-row">
            <label class="label">Vardas</label>
            <input type="text" name="name" class="input" placeholder="Vardas" required>
        </div>
        <div class="addclient-row">
            <label class="label">Pavardė</label>
            <input type="text" name="surname" class="input" placeholder="Pavardė" required>
        </div>
        <div class="addclient-row">
            <label class="label">Sąskaitos numeris</label>
            <input type="text" name="account_nr" class="input" placeholder="<?= $iban ?>" value=<?= $iban ?> readonly>
        </div>
        <div class="addclient-row">
            <label class="label">Asmens kodas</label>
            <input type="text" name="social_id" class="input" placeholder="Asmens kodas" required>
        </div>
        <div class="addclient-row">
            <label class="label">Slaptažodis</label>
            <input type="password" name="password" class="input" required>
        </div>
        <div>
            <input type="hidden" name="funds" value="0">
        </div>
        <div class="addclient-row">
            <button type="submit" class="addclient-btn">SUKURTI</button>
        </div>
    </form>
</div>

<?php
require __DIR__ . '/bottom.php';
