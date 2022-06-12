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

    public function showUser(int $id)
    {
        $user = (new JsonDB('clients'))->show($id);
        return App::view('showuser', ['title' => 'Kliento puslapis'], $user);
    }

    public function delete(int $id)
    {
        $deleteUser = (new JsonDB('clients'))->delete($id);  // kaip galima kitaip?
        header('Location: http://bankas2.lt');
        die;
    }

    public function update(int $id)
    {

        $user = (new JsonDB('clients'))->show($id);
        return App::view('update', ['title' => 'Redaguoti kliento duomenis'], $user);
    }

    public function doUpdate(int $id)
    {
        $user = array();
        $user['id'] = $id;
        $user['vardas'] = $_POST['vardas'];
        $user['pavarde'] = $_POST['pavarde'];
        $user['saskaita'] = $_POST['saskaita'];
        $user['askodas'] = $_POST['askodas'];
        $user['lesos'] = $_POST['lesos'];
        M::add($id . $user['vardas'] . ' ' . $user['pavarde'] . '<br> klientas redaguotas', 'success');
        header('Location: /update/' . $id);
        return (new JsonDB('clients'))->update($id, $user);
    }
}
