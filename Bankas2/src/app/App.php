<?php

namespace Bankas2;

use Bankas2\Controllers\HomeController;
use Bankas\Controllers\LoginController;
use Bankas2\Messages;
use Bankas2\DB\JsonDb;
use Bankas2\DB\DataBase;

class App
{

    const DOMAIN = 'bankas2.lt';
    const APP = '/../DB/';
    // define('URL', 'http://localhost/vienaragiai/021/src/');
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
        ob_end_clean();            //isvalo bufferi
    }

    public static function sent()
    {
        echo self::$html; // viska is-echoijina is bufferio
    }

    public static function view(string $name, array $title = [], $data = [])  //kreipiasi i view folderi
    {
        extract($title);     //paduoda ir priskiria is masyvo title
        extract($data);
        require __DIR__ . ' /../views/' . $name . '.php';
    }

    public static function json(array $data = [])
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public static function redirect($url = '')
    {
        header('Location: http://' . self::DOMAIN . '/' . $url);
    }


    private static function route(array $uri)
    {
        $m = $_SERVER['REQUEST_METHOD'];    // is serverio paimtas request methodas

        if (count($uri) == 1 && $uri[0] === '') {   // pradinis puslapis
            return (new HomeController())->index(); //sukuriam nauja kontroleri i kreipiames i indexa
        }

        // if ('GET' == $m && count($uri) == 1 && $uri[0] === 'json') {   // gauti json faila
        //     return (new HomeController())->indexJson();
        // }

        // if ('GET' == $m && count($uri) == 2 && $uri[0] === 'get-it') {   // gauti json faila
        //     return (new HomeController())->getIt($uri[1]);
        // }

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'form') {   // forma puslapis
            return (new HomeController())->form();
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'form') {   // forma puslapis
            return (new HomeController())->doForm();
        } else {
            return (new HomeController())->notFound();
        }
    }
}
