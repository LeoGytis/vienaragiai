<?php
session_start();
// Scenarijus POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $_SESSION['bla'] = $_POST['tek'];


    header('Location: http://localhost/vienaragiai/012/form.php');
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
    <title>FORM</title>
</head>
<body>

    <?php
    echo $_SESSION['bla'];
    ?>

    <form action="" method="post">

    Tavo tekstas: <input type="text" name="tek">

    <button type="submit">GO</button>
    </form>
    
</body>
</html>