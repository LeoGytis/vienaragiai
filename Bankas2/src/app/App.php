<?php

namespace Bankas2;

use Bankas2\Controllers\AuthController;
use Bankas2\Controllers\HomeController;
use Bankas2\Controllers\LoginController;
use Bankas2\DB\JsonDB;
use Bankas2\Messages as M;
use Bankas2\Services;
use Bankas2\Validator;

class App
{
    private static $html;

    public static function start()
    {
        session_start();
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
        header("Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With");
        header('Content-Type: application/json');
        Messages::init();   //israsom kas buvo sesijoje
        ob_start();         //bufferis surenka viska ir nieko i ekrana nerodo
        $uri = explode('/', $_SERVER['REQUEST_URI']);   // suranda uri ir sudeda kiekviena  kas "/" i array
        array_shift($uri);                              // istrina pirma array reiksme ir suindexuoja per naujo
        self::route($uri);
        self::$html = ob_get_contents(); //pries isvalant kibira uzsaugau duomenis
        ob_end_clean();                  //isvalo bufferi
    }

    public static function sent()
    {
        // echo $_POST['currency'];
        echo self::$html; // viska is-echoijina is bufferio 
    }

    public static function view(string $name, array $data = [])  //kreipiasi i view folderi
    {
        extract($data);      // isskleidzia is masyvo visus elementus
        require __DIR__ . ' /../views/' . $name . '.php';
    }

    public static function convertToJSON(array $data = [])   //iskoduoja data i json formata
    {
        echo json_encode($data);
    }

    public static function redirect($url = '')
    {
        header('Location: http://bankas2.lt/' . $url);
    }

    public static function url($url = '')
    {
        return 'http://bankas2.lt/' . $url;
    }

    // ==================== Authorization ====================
    public static function authAdd(object $user)
    {
        $_SESSION['auth'] = 1;  // yra auterizuotas
        $_SESSION['user'] = $user;
    }

    public static function authRemove()
    {
        unset($_SESSION['auth'], $_SESSION['user']);
    }

    public static function authCheck(): bool
    {
        return isset($_SESSION['auth']) && $_SESSION['auth'] == 1;
    }

    public static function authName(): string
    {
        return $_SESSION['user']->social_id;
    }

    // ==================== Router ====================
    private static function route(array $uri)
    {
        $m = $_SERVER['REQUEST_METHOD'];

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'login') {
            if (self::authCheck()) {  //jei prisijunges - grazini i pradini
                M::add('Tu jau esi prisijungęs!', 'alert');
                return self::redirect();
            }
            return (new LoginController())->showLogin();
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'login') {
            return (new LoginController())->doLogin();
        }

        // logout methodas yra -->> POST
        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'logout') {
            return (new LoginController())->doLogout();
        }

        if (count($uri) == 1 && $uri[0] === '') {
            if (!self::authCheck()) {  // jeigu useris neautorizuotas grazinam i login
                return (new LoginController())->showLogin();
            }
            return (new HomeController())->index();
        }

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'form') {
            return (new HomeController())->form();
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'form') {
            if ((new Validator('clients'))->formValidation($_POST)) {
                return self::redirect('form');
            } else
                return (new HomeController())->doForm();
        }

        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'showuser') {
            return (new HomeController())->showUser($uri[1]);
        }
        if ('POST' == $m && count($uri) == 2 && $uri[0] === 'showuser') {
            echo $_POST['currency'];
            $currency = Services::getCurrencyRate($_POST['currency']);
            echo $currency;
            M::add($currency . 'valiuta', 'alert');
            return self::redirect('showuser/96');   // <<-- cia nesutvarkyta
            return (new HomeController())->showUser($uri[1]);
        }

        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'update') {
            return (new HomeController())->update($uri[1]);
        }

        if ('POST' == $m && count($uri) == 2 && $uri[0] === 'update') {
            return (new HomeController())->doUpdate($uri[1]);
        }

        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'delete') {
            return (new HomeController())->delete($uri[1]);
        }


        // ==================== API ====================

        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'api' && $uri[1] === 'home') {
            $clients = (new JsonDb('clients'))->showAll();
            return self::convertToJson($clients);
        }

        if ('POST' == $m && count($uri) == 2 && $uri[0] === 'api' && $uri[1] === 'add') {
            $rawData = file_get_contents("php://input");  //gauni streama kuri issiuntei
            $data = json_decode($rawData, 1);    // ALABAMA kaip objekta kurt?
            (new JsonDb('clients'))->create($data);
        }

        if ('DELETE' == $m && count($uri) == 3 && $uri[0] == 'api' && $uri[1] === 'delete') {
            (new JsonDb('clients'))->delete($uri[2]);
        }

        if ('PUT' == $m && count($uri) == 3 && $uri[0] == 'api' && $uri[1] === 'edit') {
            $rawData = file_get_contents("php://input");
            $data = json_decode($rawData, 1);
            (new JsonDb('clients'))->update($uri[2], $data);
        }


        // ==================== 404 ====================
        else {
            return (new HomeController())->notFound();
        }
    }
}
