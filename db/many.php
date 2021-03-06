<?php

$host = '127.0.0.1';
$db   = '1_ragis';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

?>


<?php


// READ
// SELECT column1, column2, ...
// FROM table_name;
// ORDER - rikiavimas
// DESC - rikiavimas atvirkstine tvarka
// WHERE type = 3 (tiktais tipo 3 'palmes')

// Kreipimasis i mySQL pateikti duomenis 
$sql = "SELECT tt.id, tt.title, ty.title AS type_title, height
        FROM type_trees AS tt
        RIGHT JOIN types AS ty
        ON tt.type = ty.id
";

// I duomenu baze issiuncia uzklausa
$stmt = $pdo->query($sql);

// echo '<ul>';
// while ($row = $stmt->fetch()) {
//     echo '<li>' . $row['title'] . ' ' . $row['height'];
// }
// echo '</ul>';

// Gaunamas objektas i kuri yra uzkoduotas 
$trees = $stmt->fetchAll();
echo '<pre>';
// print_r($trees);


echo '<ul>';
foreach ($trees as $tree) {
    echo '<li>' . $tree['id'] . ' ' . $tree['title'] . ' ' . $tree['height'] . ' ' . ($tree['type_title'] ? $tree['type_title'] : '---') . '</li>';
}
echo '</ul>';
