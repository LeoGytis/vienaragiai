<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 12</title>
</head>
<body>
    <h1>Hello, Kitty</h1>
    <a href="http://localhost/vienaragiai/Paskaitos/012/?page=1">PAGE 1</a>
    <a href="http://localhost/vienaragiai/Paskaitos/012/?page=2">PAGE 1</a>
    <a href="http://localhost/vienaragiai/Paskaitos/012/?page=3">PAGE 1</a>
    <?php
    if ($_GET['page'] == 1) {
        ?>
        <h2>PIRMASIS</h2>
        <?php   
    }
    if ($_GET['page'] == 2) {
        ?>
        <h2>ANTRASIS PUSLAPIUKAS</h2>
        <?php   
    }
    if ($_GET['page'] == 3) {
        ?>
        <h2>PASKUTINIS 3</h2>
        <?php   
    }
    ?>
</body>
</html>