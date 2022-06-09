<?php

namespace Bankas2\Controllers;

use Bankas2\App;

class HomeController
{

    public static function index()
    {
        return App::view('home');
    }
}
