<?php
namespace src\models;
use \core\Model;

class User extends Model {

    public $id;
    public $nome;
    public $email;   
    public $password;
    public $token; 

    public function setId($id){
       $this->id = $id;

    }
    public function getId(){
        return $this->id;
    }

    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;

    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPasswuord(){
        return $this->password;
    }

    public function setToken($token){
        $this->token =  $token;
    }

    public function getToken(){
        return $this->token;
    }

}
