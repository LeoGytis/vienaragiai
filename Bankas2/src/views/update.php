<?php
require __DIR__ . '/top.php';

// echo '<pre>';
// print_r($data);
?>
<h3 class="success">Kliento ID: <?= $data['id'] ?></h3>
<div class="addclient-column">
    <form action="" method="post" class="addclient">
        <div class="addclient-row">
            <label class="label">Vardas</label>
            <input type="text" name="vardas" class="input" value="<?= $data['vardas'] ?>" required>
        </div>
        <div class="addclient-row">
            <label class="label">Pavardė</label>
            <input type="text" name="pavarde" class="input" value="<?= $data['pavarde'] ?>" required>
        </div>
        <div class="addclient-row">
            <label class="label">Sąskaitos numeris</label>
            <input type="text" name="saskaita" class="input" value="<?= $data['saskaita'] ?>" readonly>
        </div>
        <div class="addclient-row">
            <label class="label">Asmens kodas</label>
            <input type="text" name="askodas" class="input" value="<?= $data['askodas'] ?>" required>
        </div>
        <div class="addclient-row">
            <!-- <label class="label">Lėšos</label> -->
            <input type="hidden" name="lesos" value="<?= $data['lesos'] ?>">
            <input type="hidden" name="password" value="<?= $data['password'] ?>">
        </div>
        <div class="addclient-row">
            <button type="submit" class="addclient-btn">REDAGUOTI</button>
        </div>
    </form>
</div>

<?php
require __DIR__ . '/messages.php';
require __DIR__ . '/bottom.php';
