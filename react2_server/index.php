<?php

// ================== SETTINGS ==================

define('INSTALL', '/vienaragiai/react2_server/'); // Apsirasom ka norim nutrinti
define('DIR', __DIR__ . '/app/'); //Virsutinis diras
define('URL', 'http://localhost/Paskaitos/vienaragiai/react2_server');
require __DIR__ . '/JsonDb.php';

$db = new JsonDb('farm');

$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);  //nutrina visa kelia ir palieka tik gala 
$uri = explode('/', $uri);                                 // iskleidzia i masyva nuimdami '/'


// ================== ROUTER ==================

$m = $_SERVER['REQUEST_METHOD'];

if ($m == 'GET' && count($uri) == 1 && $uri[0] == 'animals') {
    $out = $db->showAll('farm');
}

if ($m == 'POST' && count($uri) == 1 && $uri[0] == 'animals') {
    $rawData = file_get_contents("php://input");  //gauni streama kuri issiuntei
    $data = json_decode($rawData, 1);
    $db->create($data);
    $out = ['msg' => 'Valio! Animal was created!'];
}

if ($m == 'DELETE' && count($uri) == 2 && $uri[0] == 'animals') {

    $db->delete($uri[1]);
    $out = ['msg' => 'Valio! Animal was deleted'];
}


$out = json_encode($out);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
header("Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With");


echo $out;
