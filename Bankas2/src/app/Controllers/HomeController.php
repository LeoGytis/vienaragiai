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
        $user['name'] = $_POST['name'];
        $user['surname'] = $_POST['surname'];
        $user['account_nr'] = $_POST['account_nr'];
        $user['social_id'] = $_POST['social_id'];
        $user['password'] = md5($_POST['password']);    //<<--md5
        $user['funds'] = $_POST['funds'];
        M::add($user['name'] . ' ' . $user['surname'] . '<br> sąskaita sukurta', 'success');
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
        return App::view('showuser', ['title' => 'Kliento puslapis', 'messages' => M::get(), 'data' => $user]);
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
        $user['name'] = $_POST['name'];
        $user['surname'] = $_POST['surname'];
        $user['account_nr'] = $_POST['account_nr'];
        $user['social_id'] = $_POST['social_id'];
        $user['funds'] = $_POST['funds'];
        $user['password'] = $_POST['password'];    //<<-- md5
        M::add($user['name'] . ' ' . $user['surname'] . '<br> klientas redaguotas', 'success');
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
