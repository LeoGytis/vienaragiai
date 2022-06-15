<?php

use Bankas2\App; ?>

<?php if (App::authCheck()) : ?>
    <div>
        <!-- <span>Tu esi prisijungęs, kaip: <?= $_SESSION['user']->name . ' ' . $_SESSION['user']->surname ?></span> -->
        <form action="<?= App::url('logout') ?>" method="post">
            <button class="list-btn" type="submit">Atsijungti</button>
        </form>
    </div>

<?php else : ?>
    <a href="<?= App::url('login') ?>">Prisijungti</a>
<?php endif ?>