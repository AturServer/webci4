<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Salesdo extends BaseController
{
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
            echo view('do/index');
         echo view('partials/footer');
    }
     public function savedo(){
        
         if(isset($_POST['btnSave'])){
             echo 'Test';
         }
     }
}