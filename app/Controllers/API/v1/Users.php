<?php namespace App\Controllers\API\v1;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use CodeIgniter\HTTP\IncomingRequest;//TEST REQUEST PUT
class Users extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index(){
    $auth='false';
    if($auth=='login'){
      $model = new UserModel();  
      $data['users'] = $model->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
    }
    else{
        $data=array(
            array(
                'token'=>'Failed!!',
            )
            );
        return $this->respond($data);
    }
    }
    // create
    public function create() {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),       
            'email'  => $this->request->getVar('email'),
            'role' => $this->request->getVar('role'),
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }
    // single user
    public function show($id = null){
        
        $model = new UserModel();
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
    $ceklogin= $request->getRawInput('login');
    $login=$ceklogin['login'];
        if($login=='isTrue'){
            $model = new UserModel();
            $data = $this->request->getRawInput();
            $data['id'] = $id;
            $model->save($data);
            
            $response = [   
            'status'   => 200,
            'error'    => null,
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

    // delete
    public function delete($id = null){
        $model = new UserModel();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Not found');
        }
    }
    
    
    
}