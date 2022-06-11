<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;

class HomeController
{

    public function getIt($param)
    {
        echo 'Parametras: ' . $param;
    }

    public static function index()
    {
        return App::view('home', ['title' => 'Saskaitu sarasas']);
    }



    public static function indexJson()
    {
        return App::json([
            'title' => 'Alabama',
            'list' => 'sarasas'
        ]);
    }

    public function form()
    {
        return App::view('form', ['title' => 'Prideti klienta', 'messages' => M::get()]);
    }

    public function doForm()
    {
        M::add('Puiku', 'success');
        M::add($_POST['alabama'], 'success');
        return App::redirect('form');
    }
}
