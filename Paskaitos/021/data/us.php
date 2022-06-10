<?php

$users = [
    ['id' => 1, 'name' => 'bebras', 'psw' => md5('123'), 'full_name' => 'Bebras Upinis'],
    ['id' => 2, 'name' => 'lina', 'psw' => md5('123'), 'full_name' => 'Lina Linovaitė'],
    ['id' => 3, 'name' => 'petras', 'psw' => md5('123'), 'full_name' => 'Peter Jonson']
];

file_put_contents(__DIR__ . '/users.json', json_encode($users));
