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

<fieldset>
    <legend>CREATE</legend>
    <form method="post">
        Title: <input type="text" name="title">
        Height: <input type="text" name="height">
        Type: <select name="type">
            <option value="1">Lapas</option>
            <option value="2">Spyglys</option>
            <option value="3">Palme</option>
        </select>
        <input type="hidden" name="_method" value="post">
        <button type="submit">Create</button>
    </form>
</fieldset>

<fieldset>
    <legend>DELETE</legend>
    <form method="post">
        ID: <input type="text" name="id">
        <input type="hidden" name="_method" value="delete">
        <button type="submit">Delete</button>
    </form>
</fieldset>

<fieldset>
    <legend>UPDATE</legend>
    <form method="post">
        ID: <input type="text" name="id">
        Title: <input type="text" name="title">
        <input type="hidden" name="_method" value="put">
        <button type="submit">Update</button>
    </form>
</fieldset>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ============= CREATE ============= 
    // INSERT INTO table_name (column1, column2, column3, ...)
    // VALUES (value1, value2, value3, ...);
    if ($_POST['_method'] == 'post') {
        $sql = "
        INSERT INTO trees
        (title, height, type)
        VALUES (:a, :z, :type)
        ";
        // Situs buvo galima rasyt bet daug kabuciu
        // VALUES ('" . $_POST['title'] . "'," . $_POST['height'] . "," . $_POST['type'] . ")
        // $pdo->query($sql); 
        $stmt = $pdo->prepare($sql);
        // $stmt->execute([$_POST['title'], $_POST['height'], $_POST['type']]);

        $stmt->execute([
            'z' => $_POST['height'],
            'type' => $_POST['type'],
            'a' => $_POST['title']
        ]);


        header('Location: http://localhost/vienaragiai/db/');
        die;
    }

    // ============= DELETE ============= 
    // DELETE FROM table_name WHERE condition;
    if ($_POST['_method'] == 'delete') {

        $sql = "
            DELETE FROM trees
            WHERE id = ?
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['id']]);

        header('Location: http://localhost/vienaragiai/db/');
        die;
    }


    // ============= UPDATE ============= 
    // UPDATE table_name
    // SET column1 = value1, column2 = value2, ...
    // WHERE condition;
    if ($_POST['_method'] == 'put') {
        $sql = "
            UPDATE trees
            SET title = ?
            WHERE id = ?
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['title'], $_POST['id']]);

        header('Location: http://localhost/vienaragiai/db/');
        die;
    }
}


// READ
// SELECT column1, column2, ...
// FROM table_name;
// ORDER - rikiavimas
// DESC - rikiavimas atvirkstine tvarka
// WHERE type = 3 (tiktais tipo 3 'palmes')

// Kreipimasis i mySQL pateikti duomenis 
$sql = "SELECT id, title, height, type
        FROM trees
        ORDER BY height DESC
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
    echo '<li>' . $tree['id'] . ' ' . $tree['title'] . ' ' . $tree['height'] . ' ' . ['Lapuotis', 'Spygliuotis', 'Palme'][$tree['type'] - 1] . '</li>';
}
echo '</ul>';


$sql = "SELECT type, sum(height) AS height_sum, count(id) as trees_count, GROUP_CONCAT(title, ' -->>') AS titles
        FROM trees
        GROUP BY type
";
$stmt = $pdo->query($sql);

$trees = $stmt->fetchAll();
// print_r($trees);

// echo $tree['height_sum'];

echo '<ul>';
foreach ($trees as $tree) {
    echo '<li>' . $tree['height_sum'] . ' ' . $tree['trees_count'] . ' ' . $tree['titles'] . ' ' . ['Lapuotis', 'Spygliuotis', 'Palme'][$tree['type'] - 1] . '</li>';
}
echo '</ul>';
