<?php

namespace Bankas2;

use Bankas2\Controllers\HomeController;
use Bankas2\Messages;

class App
{

    const DOMAIN = 'bankas2.lt';


    public static function start()
    {
        session_start();
        Messages::init();   //israsom kas buvo sesijoje
        $uri = explode('/', $_SERVER['REQUEST_URI']);   // suranda uri ir sudeda i array
        array_shift($uri);                              // arba istrina slasha '/' ir sudeda i array
        self::route($uri);
    }

    public static function view(string $name, array $data = [])  //kreipiasi i view folderi
    {
        extract($data);     //paduoda ir priskiria is masyvo title
        require __DIR__ . ' /../views/' . $name . '.php';
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

        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'forma') {   // forma puslapis
            return (new HomeController())->form(); //sukuriam nauj
        }

        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'forma') {   // forma puslapis
            return (new HomeController())->doForm(); //sukuriam nauj
        } else {
            echo 'Puslapis nerastas';
        }
    }
}
