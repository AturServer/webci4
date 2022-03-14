<?php 
namespace Config;
use Codeigniter\Config\BaseConfig;

class MyConfig extends BaseConfig{
   public $name = "pisAPP";
   public $author = "Tyo";
   public function login(){
   return $this->name. " - ". $this->author;
   }
   
}
?>