<?php
namespace src\controllers;

use \core\Controller;
use \core\Database;

use \src\models\User;
use \src\DAO\UserDAO;

use \src\models\Turma;
use \src\DAO\TurmaDAO;

class TurmaController extends Controller {
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

        $listaTurma = new TurmaDAO($connection);
        $lista = $listaTurma->listAll(); 
               
        $this->render('turma', ['turmas' => $lista]);       
        
    }
    public function frequencia(){
        $this->render('frequencia');
    }

    public function conteudo(){
        $this->render('conteudo');
    }
   
    public function nota(){
        
        $this->render('nota');}

    public function atividade(){
        $this->render('atividade');
    }

    public function material(){
        $this->render('materialDidatico');
    }

    public function addTurma(){
        $connection = Database::getInstance();
        
        $turma = new TurmaDAO($connection);   
        
       $escola = filter_input(INPUT_POST, 'escola');
       $nomeDaTurma = filter_input(INPUT_POST, 'nomeDaTurma');
       $turno = filter_input(INPUT_POST, 'turno');
       $anoLetivo = filter_input(INPUT_POST, 'anoLetivo');

             
       if($escola && $nomeDaTurma && $anoLetivo){

                $t= new Turma();              
                $t->setEscola($escola); 
                $t->setNomeDaTurma($nomeDaTurma);
                $t->setTurno($turno);
                $t->setAnoLetivo($anoLetivo);         

       $turma->inserir($t);

       }else{
         $_SESSION['flash'] = 'Todos os campos são obrigatórios, repita o processo';
        
       }
        $this->redirect('turma');
    }

    public function dellTurma($id){
        $connection = Database::getInstance();
        
        $turma = new TurmaDAO($connection);   
        
        if($id){
           $id = $id['id'];           
            $turma->deleteTurma($id);
            $this->redirect('turma');
        }
        
    
    }
}

