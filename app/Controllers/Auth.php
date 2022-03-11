<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
       $session = \Config\Services::session();
       $data['islogin']=$session->get('islogin');
       $data['txtTittle']='Auth';
       echo view('auth/login',$data); 
    }
    public function signin()
    {
    $session = \Config\Services::session();
    if(isset($_POST['btnLogin'])){
    $getLogin=array(
        'email'=>$_POST['txtUser'],
        'pass'=>md5($_POST['txtPass']),
    );
  $getModel = new \App\Models\AuthModel(); // call your Model
  $listUser = $getModel->getListCat($getLogin); // execute method
  $userCheck = $listUser->resultID->num_rows; // num_rows object
  $listCatResults = $listUser->getResult(); // or ->getRow()
  if($userCheck>0){
  foreach($listCatResults as $ok){
      $auth= [
      'username' => $ok->name,
      'role' => $ok->role,
      'islogin' => 'success',
      ];
       $session->set($auth);
       return redirect()->to(base_url('/dashboard'))->with('info', "Invalid Credential");

  };        
    }
    else{
        echo 'User Not Found';
        return redirect()->to(base_url('/auth'))->with('info', "Invalid Credential");
    }
}

   
    }

    public function signout()
    {
        $session = \Config\Services::session();
        $session->remove('islogin');
        return redirect()->to(base_url('/auth'))->with('error', "Invalid Credential");
    }
}