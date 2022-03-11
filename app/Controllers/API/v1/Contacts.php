<?php

namespace App\Controllers\API\v1;

use CodeIgniter\RESTful\ResourceController;
//
use CodeIgniter\API\ResponseTrait;
use App\Models\ContactModel;
//
class Contacts extends ResourceController
{       
    protected $modelName = 'App\Models\ContactModel';
    protected $format    = 'json';
    use ResponseTrait;
    public function index()
    {
       // return $this->respond($this->model->findAll());
       $model = new contactModel();
       
        $data['contacts'] = $model->orderBy('id', 'DESC')->findAll();
       
        if($data){
            return $this->respond($data);
        }
        else{
        return $this->failNotFound('No Access');
        }
        
    }

   public function show($id = null){
    $model = new ContactModel();
    $data = $model->where('id', $id)->first();
    if($data){
    return $this->respond($data);    
    }else{
    return $this->failNotFound('Not found');
    }
   }
   // update
   public function update($id=null){
   $request = \Config\Services::request();
        $login=null;
        $ceklogin= $request->getRawInput('login');
         $login=$ceklogin['login'];
if($login=='isTrue'){
   $model = new ContactModel();
   $data = $this->request->getRawInput();
   $data['id'] = $id;
   $model->save($data);

   $response = [
   'status' => 200,
   'error' => null,
   'messages' => [
   'success' => 'Updated successfully'
   ]
   ];
   return $this->respond($response);
   }
   else{
   $response = [
   'status' => 202,
   'error' => null,
   'messages' => [
   'success' => 'Not Access !!!'
   ]
   ];
   return $this->respond($response);
   }

   }
}