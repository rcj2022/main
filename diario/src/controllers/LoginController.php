<?php
namespace src\controllers;

use \core\Controller;

use \src\models\user;
use \src\DAO\userDAO;

use \core\Database;

class LoginController extends Controller{
   
    public function signin() {
      

        $flash='';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash']='';
        }


        $this->render('signin', [
            'flash'=>$flash
        ]);
      
        
    }

    public function signinAction(){

        $connection = Database::getInstance();
        
        $user = new UserDAO($connection);   
        
       $name = filter_input(INPUT_POST, 'name');
       $password = filter_input(INPUT_POST, 'password');

      
       

       if($name && $password){
        
            if($token=$user->verifyLogin($name, $password)){
               
                $_SESSION['token'] = $token;
                $_SESSION['nome'] = $name;
                
                $this->redirect('/');
            }else{
                $_SESSION['flash'] = 'Nome e/ou senha incorretos';
                $this->redirect('signin');
            }

       }else{
         $_SESSION['flash'] = 'Nome ou senha incorretos';
         $this->redirect('signin');
       }

    }

    public function signup(){
        
        $this->render('signup');      
         
    }

    public function signupAction(){

        $connection = Database::getInstance();
        
        $user = new UserDAO($connection);   

        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password'); 
        
        
        if($name && $email && $password){
            
            if($user->emailExists($email)===false) {
                       
                $u = new User();                
                $u->setNome($name);
                $u->setEmail($email);
                $u->setPassword($password);
                
                $user->addUser($u);

               $this->redirect('/');

            }else{
                $_SESSION['flash'] = 'E-mail já cadastrado!';
                $this->redirect('signup');
            }

        }else{
            
         $this->redirect('signup');
        }

    }
    public function logout(){
        session_destroy();
        $this->redirect('/');
    }

    
}
