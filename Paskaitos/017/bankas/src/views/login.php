<?php


require __DIR__ . '/top.php';
?>


<h1>Home sweet home</h1>

<form method="post">
    <input type="text" name="name">
    <input type="password" name="psw">
    <button type="submit">Login</button>
</form>

<?php
require __DIR__ . '/bottom.php';