<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;
use Bankas2\DB\JsonDb;


class HomeController
{
    // public function getIt($param)
    // {
    //     echo 'Parametras: ' . $param;
    // }

    public static function index()
    {
        $db = new JsonDb('clients');
        // $clients = json_decode(file_get_contents(__DIR__ . '/../DB/data/us.json'), true);
        $clients = $db->showAll();
        return App::view('home', ['title' => 'Saskaitu sarasas'], $clients);
    }

    // public static function indexJson()
    // {
    //     return App::json([
    //         'title' => 'Alabama',
    //         'list' => 'sarasas'
    //     ]);
    // }

    public function form()
    {
        return App::view('form', ['title' => 'Prideti klienta'], ['messages' => M::get()]);
    }

    public function doForm()
    {
        $user = array();
        $user['vardas'] = $_POST['vardas'];
        $user['pavarde'] = $_POST['pavarde'];
        $user['saskaita'] = $_POST['saskaita'];
        $user['askodas'] = $_POST['askodas'];
        $user['lesos'] = $_POST['lesos'];
        M::add($user['vardas'] . ' ' . $user['pavarde'] . '<br> sąskaita sukurta', 'success');
        header('Location: /form');
        return (new JsonDB('clients'))->create($user);
    }

    public function notFound()
    {
        return App::view('notfound', ['title' => 'Page not found']);
    }
}
