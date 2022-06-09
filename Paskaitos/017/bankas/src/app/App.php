<?php
namespace Bankas;
use Bankas\Controllers\HomeController;
use Bankas\Controllers\LoginController;
use Bankas\Messages as M;

class App {

    const DOMAIN = 'bankas.lt';
    const APP = __DIR__ . '/../';
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

    public static function url($url = '') {
        return 'http://' . self::DOMAIN . '/' . $url;
    }

    public static function authAdd(object $user) {
        $_SESSION['auth'] = 1;
        $_SESSION['user'] = $user;
    }

    //istrina is sesijos
    public static function authRem() {
        unset($_SESSION['auth'], $_SESSION['user']);
    }

    public static function auth() : bool {
        return isset($_SESSION['auth']) && $_SESSION['auth'] == 1;
    }

    public static function authName() : string {
        return isset($_SESSION['user'])->full_name;
    }

    private static function route(array $uri) {

        $m = $_SERVER['REQUEST_METHOD'];

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'login') {
            return (new LoginController())->showLogin();
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'login') {
            return (new LoginController())->doLogin();
        }

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'logout') {
            return (new LoginController())->doLogout();
        }

        if (count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->index();

            echo 'Namai';
        }
        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'forma') {
            if (!self::auth()) {  // jeigu useris neautorizuotas grazinam i login
                return self::redirect('login');
            }
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