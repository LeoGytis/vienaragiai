<?php

$users = [
    ['id' => 1, 'name' => 'bebras', 'password' => md5('123'), 'full_name' => 'Bebras Upinis'],
    ['id' => 2, 'name' => 'lina', 'password' => md5('123'), 'full_name' => 'Lina Linovaite'],
    ['id' => 3, 'name' => 'petras', 'password' => md5('123'), 'full_name' => 'Peter Jonson'],
];

file_put_contents(__DIR__ . '/users.json', json_encode($users));