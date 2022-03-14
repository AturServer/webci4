<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//getLibary
use App\Libraries\configWriter;
class Dashboard extends BaseController
{
    //getCustomLibrary
    public function __construct()
    {
   

    }


    public function index()
    {
        //
        $session = \Config\Services::session();
        $data['islogin']=$session->get('islogin');
        $data['pic']=$session->get('username');
        $data['role']=$session->get('role');
        $data['txtTittle']='Dashboard';
        echo view('partials/header',$data);
        echo view('partials/top');
          echo view('dashboard/index');
        echo view('partials/footer');
    }
    
    public function wconfig()
    {
   
    }
}