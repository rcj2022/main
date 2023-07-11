<?php
namespace src\controllers;

use \core\Controller;
use \core\Database;

use \src\models\User;
use \src\DAO\UserDAO;


class HomeController extends Controller {
    private $loggedUser;
    public function __construct(){

      $connection = Database::getInstance();
      $userDAO = new UserDAO($connection);
      
      $this->loggedUser = $userDAO->checkLogin();        
      
          if($this->loggedUser === false){
            
          $this->redirect('signin');
       }

    }

    public function index() {

        $connection = Database::getInstance();
        $userDAO = new UserDAO($connection);

        $u[]=$userDAO->checkLogin();
               
        $this->render('home',['usuario'=>$u]);
        
    }

    public function calendario(){
        $this->render('calendario');
    }
}
