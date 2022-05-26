<?php
if (isset($_GET['r'])) {
 header('Location: http://localhost/vienaragiai/ND/12-WEB-mechanika/05-blue.php');
 die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED</title>
    
</head>
<body style="background:red;">
<a href="http://localhost/vienaragiai/ND/12-WEB-mechanika/05-red.php?r=1">BLUE</a>
</body>
</html>