<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;
use Bankas2\DB\JsonDb;


class HomeController
{

    public static function index()
    {
        $users = (new JsonDb('clients'))->showAll();
        return App::view('home', ['title' => 'Saskaitu sarasas', 'data' => $users]);
    }

    public function form()
    {
        return App::view('form', ['title' => 'Prideti klienta', 'messages' => M::get()]);
    }

    public function doForm()
    {
        $user = [];
        $user['vardas'] = $_POST['vardas'];
        $user['pavarde'] = $_POST['pavarde'];
        $user['saskaita'] = $_POST['saskaita'];
        $user['askodas'] = $_POST['askodas'];
        $user['password'] = $_POST['password'];    //md5
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
        return App::view('showuser', ['title' => 'Kliento puslapis', 'data' => $user]);
    }

    public function update(int $id)
    {

        $user = (new JsonDB('clients'))->show($id);
        return App::view('update', ['title' => 'Redaguoti kliento duomenis', 'messages' => M::get(), 'data' => $user]);
    }

    public function doUpdate(int $id)
    {
        $user = [];
        $user['id'] = $id;
        $user['vardas'] = $_POST['vardas'];
        $user['pavarde'] = $_POST['pavarde'];
        $user['saskaita'] = $_POST['saskaita'];
        $user['askodas'] = $_POST['askodas'];
        $user['lesos'] = $_POST['lesos'];
        $user['password'] = $_POST['password'];
        M::add($user['vardas'] . ' ' . $user['pavarde'] . '<br> klientas redaguotas', 'success');
        header('Location: /update/' . $id);
        return (new JsonDB('clients'))->update($id, $user);
    }

    public function delete(int $id)
    {
        (new JsonDB('clients'))->delete($id);
        header('Location: http://bankas2.lt');
        die;
    }
}
