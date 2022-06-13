<?php
require __DIR__ . '/top.php';

?>
<h3 class="success">Kliento ID: <?= $data['id'] ?></h3>
<div class="addclient-column">
    <form action="" method="post" class="addclient">
        <div class="addclient-row">
            <label class="label">Vardas</label>
            <input type="text" name="name" class="input" value="<?= $data['name'] ?>" required>
        </div>
        <div class="addclient-row">
            <label class="label">Pavardė</label>
            <input type="text" name="surname" class="input" value="<?= $data['surname'] ?>" required>
        </div>
        <div class="addclient-row">
            <label class="label">Sąskaitos numeris</label>
            <input type="text" name="account_nr" class="input" value="<?= $data['account_nr'] ?>" readonly>
        </div>
        <div class="addclient-row">
            <label class="label">Asmens kodas</label>
            <input type="text" name="social_id" class="input" value="<?= $data['social_id'] ?>" required>
        </div>
        <div class="addclient-row">
            <input type="hidden" name="funds" value="<?= $data['funds'] ?>">
            <input type="hidden" name="password" value="<?= md5($data['password']) ?>"> <!-- md5 -->
        </div>
        <div class="addclient-row">
            <button type="submit" class="addclient-btn">REDAGUOTI</button>
        </div>
    </form>
</div>

<?php
require __DIR__ . '/messages.php';
require __DIR__ . '/bottom.php';
