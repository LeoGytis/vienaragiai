<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--uzdeda random css koda kad nekurtu chasho -->
    <link rel="stylesheet" href="http://bankas2.lt/app.css?v=<?= time() ?>"> <!-- apgaudinejam narsykle kad css kas kart kitoks -->
    <title><?= $title ?? 'no name yet' ?> </title> <!-- default jei nera vardo -->
</head>

<body>
    <nav class="navigation">
        <div class="logo"><img src="/images/logo_img.png" alt="Logo"></div>
        <a href="/">Sąskaitų sąrašas</a>
        <a href="/form">Sąskaitos sukūrimas</a>
        <a href="/login">Prisijungti</a>
    </nav>
    <?php require __DIR__ . '/messages.php';
