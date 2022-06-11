<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;
use Bankas2\DB\JsonDb;


class HomeController
{

    public function getIt($param)
    {
        echo 'Parametras: ' . $param;
    }

    public static function index()
    {
        $db = new JsonDb('us');
        // $db->create(['name' => 'bebras', 'psw' => md5('123'), 'full_name' => 'Bebras Upinis']);
        // $db->create(['name' => 'lina', 'psw' => md5('123'), 'full_name' => 'Lina Linovaitė']);
        // $db->create(['name' => 'petras', 'psw' => md5('123'), 'full_name' => 'Peter Jonson']);
        $clients = json_decode(file_get_contents(__DIR__ . '/../DB/data/us.json'), true);
        // echo '<pre>';
        // print_r($clients);
        return App::view('home', ['title' => 'Saskaitu sarasas'], $clients);
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
