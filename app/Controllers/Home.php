<?php

namespace App\Controllers;

use Config\MyConfig; // Loading config class
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function info()
    {
        $myconfig = new MyConfig; // Creating an instance
       // echo $myconfig->author; // Accessing member variable
        echo $myconfig->login(); // Accessing member function
    }
}