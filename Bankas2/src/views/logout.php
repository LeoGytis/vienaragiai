<?php

use Bankas2\App; ?>

<?php if (App::authCheck()) : ?>

    <span>SOCIAL ID: <?= App::authName() ?></span>

    <form action="<?= App::redirect('logout') ?>" method="post">
        <button class="addclient-btn" type="submit">Logout</button>
    </form>

<?php else : ?>
    <a href="<?= App::redirect('login') ?>">Login</a>
<?php endif ?>