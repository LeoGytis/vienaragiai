<?php
namespace Bankas;
use Bankas\Controllers\HomeController;
use Bankas\Messages;

class App {

    const DOMAIN = 'bankas.lt';
    private static $html;

    public static function start() {
        session_start();
        Messages::init();
        ob_start();  // viskas eina i kibira - buffering, niekas ant ekrano neiseis
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri); // istryna slasha '/' ir susdeda i array
        self::route($uri);
        echo 'Start funkcija';
        self::$html = ob_get_contents(); //duomenys priskiriami 
        ob_end_clean();  //isvalomi duomenys
    }

    public static function sent() {
        echo self::$html;
    }

    public static function view(string $name, array $data = []) {
        extract($data); // cia atsiranda title
        return require __DIR__ . '/../views/' . $name . '.php';
    }

    public static function json(array $data = []) {
        header ('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public static function redirect($url = '') {
        header('Location: http://' . self::DOMAIN . '/' . $url);
    }

    private static function route(array $uri) {

        $m = $_SERVER['REQUEST_METHOD'];

        if (count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->index();

            echo 'Namai';
        }
        if ('GET' == $m && count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->form();

            echo 'Forma';
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->doForm();

            echo 'Forma';
        }

        else {

            echo 'kita';
        }

    }
}