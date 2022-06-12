<?php
require __DIR__ . '/top.php';
?>

<div class="addclient-column">
    <form action="" method="post" class="addclient">
        <div class="addclient-row">
            <label class="label">Asmens kodas</label>
            <input type="text" name="askodas" class="input" required>
        </div>
        <div class="addclient-row">
            <label class="label">Slaptažodis</label>
            <input type="password" name="password" class="input" required>
        </div>
        <div class="addclient-row">
            <button type="submit" class="addclient-btn">LOGIN</button>
        </div>
    </form>
</div>

<?php
require __DIR__ . '/messages.php';
require __DIR__ . '/bottom.php';
