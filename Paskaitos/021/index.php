<?php

use App\DB\JsonDb;

require __DIR__ . '/../vendor/autoload.php';
define('URL', 'http://localhost/vienaragiai/021/src/');
// gaunam duombaze
$db = new JsonDb('us');

// $db->create(['name' => 'bebras', 'psw' => md5('123'), 'full_name' => 'Bebras Upinis']);
// $db->create(['name' => 'lina', 'psw' => md5('123'), 'full_name' => 'Lina Linovaitė']);
// $db->create(['name' => 'petras', 'psw' => md5('123'), 'full_name' => 'Peter Jonson']);





$uri = explode('/', str_replace('vienaragiai/021/src/', '', $_SERVER['REQUEST_URI']));
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

if ('GET' == $m && count($uri) == 2 && $uri[0] === 'user') {
    echo '<h1>ONE USERS</h1>';
    $user = $db->show($uri[1]);
    ?>
    <div>ID: <?= $user['id'] ?>
        NAME: <?= $user['full_name'] ?>
    </div>

<?php

}

if ('POST' == $m && count($uri) == 2 && $uri[0] === 'delete') {
    $db->delete($uri[1]);
    header('Location: ' . URL . 'all');
    die;
}

if ('GET' == $m && count($uri) == 2 && $uri[0] === 'edit') {
    echo '<h1>EDIT USER</h1>';
    $user = $db->show($uri[1]);
?>
    <div>ID: <?= $user['id'] ?>

        <form action="<?= URL . 'edit/' . $user['id'] ?>" method="post">
            <input type="text" name="name" value="<?= $user['name'] ?>">
            <input type="text" name="full_name" value="<?= $user['full_name'] ?>">
            <button type="submit">SAVE</button>
        </form>
    </div>

<?php

}

if ('POST' == $m && count($uri) == 2 && $uri[0] === 'edit') {
    $user = $db->show($uri[1]);
    $user['name'] = $_POST['name'];
    $user['full_name'] = $_POST['full_name'];
    $db->update($uri[1], $user);
    header('Location: ' . URL . 'all');
    die;
}

if ('GET' == $m && count($uri) == 1 && $uri[0] === 'create') {
    echo '<h1>create USER</h1>';
?>
    <form action="<?= URL . 'create' ?>" method="post">
        name<input type="text" name="name">
        pass<input type="text" name="psw">
        fname<input type="text" name="full_name">
        <button type="submit">CREATE</button>
    </form>
    </div>
<?php

}

if ('POST' == $m && count($uri) == 1 && $uri[0] === 'create') {
    $user['name'] = $_POST['name'];
    $user['full_name'] = $_POST['full_name'];
    $user['psw'] = md5($_POST['psw']);
    $db->create($user);
    header('Location: ' . URL . 'all');
    die;
}
