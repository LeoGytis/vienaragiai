<?php

namespace Bankas2\Controllers;

use Bankas2\App;

class HomeController
{

    public static function index()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::view('home', ['title' => 'Alabama title', 'list' => $list]);
    }
}
