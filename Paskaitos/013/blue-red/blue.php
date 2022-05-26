<?php
if (isset($_GET['r'])) {
 header('Location: http://localhost/vienaragiai/013/br/red.php');
 die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUE</title>
    
</head>
<body style="background:blue;">
<a href="http://localhost/vienaragiai/013/br/blue.php?r=1">RED</a>
</body>
</html>