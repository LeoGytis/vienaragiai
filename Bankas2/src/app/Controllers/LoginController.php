<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;

class LoginController
{

    public function showLogin()
    {
        $users = json_decode(file_get_contents(__DIR__ . '/../DB/data/clients.json')); // istraukia objetkta
        echo '<pre>';
        print_r($users);
        return App::view('login', ['title' => 'Login to system', 'messages' => M::get()]);
    }

    public function doLogin()
    {
        $users = json_decode(file_get_contents(__DIR__ . '/../DB/data/clients.json')); // istraukia objetkta
        foreach ($users as $user) {
            if ($_POST['social_id'] != $user->social_id) {
                continue;
            }
            if ($_POST['password'] != $user->password) {      //md5
                M::add('Blogas prisijungimo vardas ar slaptažodis', 'alert');
                return App::redirect('login');
            } else {
                App::authAdd($user);
                M::add('Sveikas prisijunges, ' . $user->name, 'success');
                return App::redirect('form');
            }
        }
        M::add('Blogas prisijungimo vardas ar slaptažodis', 'alert');
        return App::redirect('login');
    }

    public function doLogout()
    {
        App::authRemove();
        M::add('Geros dienos!', 'success');
        return App::redirect('login');
    }
}
