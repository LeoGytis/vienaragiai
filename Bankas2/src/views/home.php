<?php

use App\DB\JsonDB;

require __DIR__ . '/../../vendor/autoload.php';

require __DIR__ . '/top.php';

define('URL', 'http://localhost/vienaragiai/Bankas2/src/');
// gaunam duombaze
$db = new JsonDB('members');

// $db->create(['name' => 'bebras', 'psw' => md5('123'), 'full_name' => 'Bebras Upinis']);
// $db->create(['name' => 'lina', 'psw' => md5('123'), 'full_name' => 'Lina Linovaitė']);
// $db->create(['name' => 'petras', 'psw' => md5('123'), 'full_name' => 'Peter Jonson']);





$uri = explode('/', str_replace('vienaragiai/Bankas2/src/', '', $_SERVER['REQUEST_URI']));
array_shift($uri);
$m = $_SERVER['REQUEST_METHOD'];





if ('GET' == $m && count($uri) == 1 && $uri[0] === 'all') {
    echo '<h1>ALL USERS</h1>';
    foreach ($db->showAll() as $user) {
?>
        <div>ID: <?= $user['id'] ?>
            <a href="<?= URL . 'user/' . $user['id'] ?>"> NAME: <?= $user['full_name'] ?></a>
            <a href="<?= URL . 'edit/' . $user['id'] ?>">[EDIT]</a>
            <form action="<?= URL . 'delete/' . $user['id'] ?>" method="post">
                <button type="submit">DELETE</button>
            </form>
        </div>

<?php
    }
}

require __DIR__ . '/bottom.php';
