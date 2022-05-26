<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black; color:white;">
    <h1>12 - WEB Mechanika</h1>
    <a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/index.php">1 UZDUOTIS A</a><br>
    <a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/?color=1">1 UZDUOTIS B</a><br>
    <a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/">2 UZDUOTIS</a><br>
    <?php
    if ($_GET['color'] == 1) {
        ?>
        <!-- <h1>Hello hello</h1> -->
        <body style="background: coral;">
        <!-- <div style="background-color: coral;">LABUTIS</div> -->
        </body>
        <?php
    }
    ?>
</body>
</html>