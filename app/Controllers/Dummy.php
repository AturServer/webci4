<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
class Dummy extends BaseController
{
    public function index()
    {
        //
    }
    public function users()
    {
    //
    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $model = new UserModel();
    $data = array(
    array(
    'id'=>1,    
    'name' =>'UserAdmin',
    'email' =>'admin@pis.pis',
    'pass' =>'202cb962ac59075b964b07152d234b70',
    'role' =>'admin',
    ),
    array(
    'id'=>2,
    'name' =>'Sales',
    'email' =>'sales@pis.pis',
    'pass' =>'202cb962ac59075b964b07152d234b70',
    'role' =>'sales',
    ),
    array(
    'id'=>3,
    'name' =>'Puchasing',
    'email' =>'purcahsing@pis.pis',
    'pass' =>'202cb962ac59075b964b07152d234b70',
    'role' =>'purchasing',
    )
    );
   if($builder->insertBatch($data)==true){ 
  //  $model->insert($data);
    $response = [
    'status' => 201,
    'error' => null,
    'messages' => [
    'success' => 'Created successfully' 
    ]
    ];
    return var_dump(json_encode($response));}
    
else{
$response = [
'status' => 201,
'error' => null,
'messages' => [
'success' => 'Failed'
]
];
return var_dump(json_encode($response));
    }
    
}
}