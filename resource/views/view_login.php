<?php

/**
 * View Login
 * Author: Dzu
 * Mail: dzu6996@gmail.com
 **/
require_once 'view.php';

class View_Login extends View
{
    public function show_login()
    {
        require_once 'config/config.php';
        include 'res/templates/login.php';
    }
    public function show_about()
    {
    }
    public function show_profiles()
    {
    }
}