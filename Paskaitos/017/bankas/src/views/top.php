<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://bankas.lt/app.css?v=<?= time() ?>"> <!--uzdeda random koda kad nekurtu chasho -->
    <title><?= $tittle ?? 'no name yet' ?> </title>
</head>
<body>
    <?php require __DIR__ . '/log.php' ?>
    <?php require __DIR__ . '/messages.php' ?>

