<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = []; 

    public function getListCat($getLogin)
    {
    return $this->asArray()->where($getLogin)->get();
    }
}