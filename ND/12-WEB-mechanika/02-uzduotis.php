<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $spalva = $_GET['color'];
?>
<body style="background-color: #<?php echo $spalva; ?>;">
    <h1>12 - WEB Mechanika</h1>
    <h2>02 UZDUOTIS</h2>
    <a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/02-uzduotis.php?color=61dafb">Skyblue</a><br>
    <h3>Pasirinkai spalva: <?php echo $spalva ?></h3>
</body>
</html>