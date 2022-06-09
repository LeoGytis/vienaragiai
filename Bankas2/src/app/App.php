<?php

namespace Bankas2;

use Bankas2\Controllers\HomeController;

class App
{

    public static function start()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);   // suranda uri ir sudeda i array
        array_shift($uri);                              // arba istrina slasha '/' ir sudeda i array
        self::route($uri);
    }

    public static function view(string $name, array $data = [])  //kreipiasi i view folderi
    {
        extract($data);     //paduoda ir priskiria is masyvo title
        require __DIR__ . ' /../views/' . $name . '.php';
    }

    private static function route(array $uri)
    {

        if (count($uri) == 1 && $uri[0] === '') {   // pradinis puslapis
            echo 'Namai';
            return (new HomeController())->index(); //sukuriam nauja kontroleri i kreipiames i indexa
        }

        if (count($uri) == 1 && $uri[0] === 'forma') {   // forma puslapis
            echo 'Forma';
            return (new HomeController())->form(); //sukuriam nauj
        } else {
            echo 'Kitas puslapis';
        }
    }
}
