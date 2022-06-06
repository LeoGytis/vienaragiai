<?php

namespace Bankas\Controllers;
use Bankas\App;


class HomeController {

    public function index() {
        echo 'Controlerio namai';
        return App::view('home');
    }
}