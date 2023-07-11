<?php
namespace src\controllers;

use \core\Controller;
use \core\Database;

use \src\models\User;
use \src\DAO\UserDAO;

use \src\models\Aluno;
use \src\DAO\AlunoDAO;

class AlunoController extends Controller {
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

        $listaAluno = new AlunoDAO($connection);
        $lista = $listaAluno->listAll(); 
               
       $this->render('aluno', ['alunos' => $lista]);
               
    }
    public function frequencia(){
        $this->render('frequencia');
    }

   

    public function addAluno(){
        $connection = Database::getInstance();
        
        $aluno = new AlunoDAO($connection);   
        
       $nome = filter_input(INPUT_POST, 'nome');
       $sexo = filter_input(INPUT_POST, 'sexo');
       $dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
       $idade = filter_input(INPUT_POST, 'idade');

             
       if($nome && $sexo && $dataNascimento){

                $a= new Aluno();              
                $a->setNome($nome); 
                $a->setSexo($sexo);
                $a->setDatanascimento($dataNascimento);
                $a->setIdade($idade);         

       $aluno->inserir($a);

       }else{
         $_SESSION['flash'] = 'Todos os campos são obrigatórios, repita o processo';
        
       }
        $this->redirect('aluno');
    }

    public function dellAluno($id){
        $connection = Database::getInstance();
        
        $aluno = new AlunoDAO($connection);   
        
        if($id){
           $id = $id['id'];           
            $aluno->deleteAluno($id);
            $this->redirect('aluno');
        }
        
    
    }

    public function matricula(){
        $this->render('matricula');
    }
}

