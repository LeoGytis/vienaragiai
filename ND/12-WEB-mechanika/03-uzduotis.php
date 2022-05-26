<?php
session_start();
// Scenarijus POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $spalva = $_POST['spalva'];

    header('Location: http://localhost/vienaragiai/ND/12-WEB-mechanika/03-uzduotis.php?color='. $spalva);
    die;

}

// Scenarijus GET
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$gautiSpalva = $_GET['color'];
?>

<body style="background-color: <?php echo $gautiSpalva; ?>;">
    <h1>12 - WEB Mechanika</h1>
    <h2>03 UZDUOTIS</h2>

    <form action="" method="post">    <!-- default method yra get -->

    Pasirinki spalvos koda:  <input type="text" name="spalva">

    <button type="submit">Pasirinkti spalva</button>
    </form>

    <h3>Pasirinkai spalva: <?php echo $gautiSpalva ?></h3>
</body>
</html>

