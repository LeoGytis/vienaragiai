<?php

namespace Bankas;

use Bankas\App;
use Bankas\Messages as M;


class LoginController
{

    public function showLogin()
    {
        return App::view('login', ['messages' => M::get()]);
    }

    public function doLogin()
    {
        $users = json_decode(file_get_contents(App::APP . 'data/us.php'));
        foreach ($users as $user) {
            if ($_POST['name'] != $user->name) {
                continue;
            }
            if (md5($_POST['psw']) != $user->psw) {
                M::add('labai blogai', 'alert');
                return App::redirect('login');
            } else {
                App::authAdd($user);
                M::add('Sveikas,' . $user->full_name, 'sucess');
                return App::redirect('forma');
            }
        }
        M::add('labai blogai', 'alert');
        return App::redirect('login');
    }

    public function doLogout()
    {
        App::authRem();
        M::add('Ate', 'sucess');
        return App::redirect('login');
    }
}
