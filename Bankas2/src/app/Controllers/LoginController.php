<?php

namespace Bankas2\Controllers;

use Bankas2\App;
use Bankas2\Messages as M;

class LoginController
{

    public function showLogin()
    {
        echo App::APP . 'data/users.json';
        return App::view('login');
    }
    public function doLogin()
    {

        $users = json_decode(file_get_contents(App::APP . 'data/users.json'));
        // foreach ($users as $user) {
        //     if ($_POST['name'] != $user->name) {
        //         continue;
        //     }
        //     if (md5($_POST['psw']) != $user->psw) {
        //         M::add('Labai blogai 1', 'alert');
        //         return App::redirect('login');
        //     } else {
        //         App::authAdd($user);
        //         M::add('Sveikas, ' . $user->full_name, 'success');
        //         return App::redirect('forma');
        //     }
        // }
        // M::add('Labai blogai 2', 'alert');
        // return App::redirect('login');
    }

    // public function doLogout()
    // {
    //     App::authRem();
    //     M::add('AtA', 'success');
    //     return App::redirect('login');
    // }
}
