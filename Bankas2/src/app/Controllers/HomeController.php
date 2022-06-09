<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;

class HomeController
{

    public static function index()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::view('home', ['title' => 'Pradinis puslapis', 'list' => $list]);
    }

    public function form()
    {
        return App::view('form', ['messages' => M::get()]);
    }

    public function doForm()
    {
        M::add('Puiku', 'success');
        M::add($_POST['alabama'], 'success');
        return App::redirect('forma');
    }
}
