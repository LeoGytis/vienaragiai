<?php

echo 'Durys <pre><br>';
echo $_SERVER['REQUEST_URI'] . '<br>'; //Surast i koki URL nori eiti vartotojas

//SETTINGS
define('INSTALL', '/vienaragiai/Paskaitos/014/in/'); // Apsirasom ka norim nutrinti
define('DIR', __DIR__ .'/app/'); //Virsutinis diras
define('URL', 'http://localhost/Paskaitos/vienaragiai/014/in/');


$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']); //randa pseudo folderi is prasomo URL
$uri = explode('/', $uri); // visus pseudo folderius sudeda i arreju

print_r($uri);

//ROUTER

if (count($uri) == 2 ) {
    if ($uri[0] == 'kambarys') {
        if ($uri[1] == 1) {
            require __DIR__ . '/app/k1.php';
        }
        elseif ($uri[1] == 2) {
            require __DIR__ . '/app/k2.php';
        }
        else {
            require __DIR__ . '/app/404.php';
        }
    }
    else if($uri[0] == 'add-funds') {
        $userId = (int) $uri[1];
        require __DIR__ . '/app/addMoney.php';
    }
    else {
        require __DIR__ . '/app/404.php';
    }
}
else {
    require __DIR__ . '/app/404.php';
}




// print_r($_SERVER);