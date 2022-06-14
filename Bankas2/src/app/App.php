<?php

namespace Bankas2;

use Bankas2\Controllers\AuthController;
use Bankas2\Controllers\HomeController;
use Bankas2\Controllers\LoginController;
use Bankas2\Messages;


class App
{
    private static $html;

    public static function start()
    {
        session_start();
        Messages::init();   //israsom kas buvo sesijoje
        ob_start();         //bufferis surenka viska ir nieko i ekrana nerodo
        $uri = explode('/', $_SERVER['REQUEST_URI']);   // suranda uri ir sudeda i array
        array_shift($uri);                              // arba istrina slasha '/' ir sudeda i array
        self::route($uri);
        self::$html = ob_get_contents(); //pries isvalant kibira uzsaugau duomenis
        ob_end_clean();                  //isvalo bufferi
    }

    public static function sent()
    {
        echo self::$html; // viska is-echoijina is bufferio  <<-- kam to reik ??
    }

    public static function view(string $name, array $data = [])  //kreipiasi i view folderi
    {
        extract($data);      // isskleidzia is masyvo visus elementus
        require __DIR__ . ' /../views/' . $name . '.php';
    }

    public static function redirect($url = '')
    {
        header('Location: http://bankas2.lt/' . $url);
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
        // serverio request methodas
        $m = $_SERVER['REQUEST_METHOD'];

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'login') {
            // if (self::authCheck()) {  //jei prisijunges - grazini i pradini
            //     return self::redirect();
            // }
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
            return (new HomeController())->index();
        }

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'form') {
            return (new HomeController())->form();
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'form') {
            return (new HomeController())->doForm();
        }

        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'showuser') {
            // if (!self::authCheck()) {  // jeigu useris neautorizuotas grazinam i login
            //     return self::redirect('login');
            // }
            return (new HomeController())->showUser($uri[1]);
        }
        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'update') {
            // if (!self::authCheck()) {  // jeigu useris neautorizuotas grazinam i login
            //     return self::redirect('login');
            // }
            return (new HomeController())->update($uri[1]);
        }
        if ('POST' == $m && count($uri) == 2 && $uri[0] === 'update') {
            return (new HomeController())->doUpdate($uri[1]);
        }

        if ('GET' == $m && count($uri) == 2 && $uri[0] === 'delete') {
            return (new HomeController())->delete($uri[1]);
        }
        // Jei nera tokio puslapio
        else {
            return (new HomeController())->notFound();
        }
    }
}
