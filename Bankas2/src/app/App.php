<?php

namespace Bankas2;

use Bankas2\Controllers\HomeController;
use Bankas\Controllers\LoginController;
use Bankas2\Messages;
use Bankas2\DB\JsonDb;
use Bankas2\DB\DataBase;

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

    public static function view(string $name, array $title = [], $data = [])  //kreipiasi i view folderi
    {
        extract($title);     //paduoda ir priskiria is masyvo title
        extract($data);
        require __DIR__ . ' /../views/' . $name . '.php';
    }

    private static function route(array $uri)
    {
        // serverio request methodas
        $m = $_SERVER['REQUEST_METHOD'];

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
        // Jei nera tokio puslapio
        else {
            return (new HomeController())->notFound();
        }
    }
}
