<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Conta;
use\src\DAO\ClienteDAO;
use\src\models\Historico;
use\src\DAO\HistoricoDAO;
use \core\Database;

class ClienteController extends Controller{
    public function index(){

        $connection = Database::getInstance();
        
        $contas = new ClienteDAO($connection);  
        
        $limit=5;
        $total = $contas->getTotal();
        $paginas = ceil($total/$limit);
        $pAtual = 1;
        if(!empty($_GET['p'])){
            $pAtual = intval($_GET['p']);

        }
        $offset = ($pAtual * $limit) - $limit;

        $clientes = $contas->listAll($offset, $limit);

        $this->render('lista',[

            'clientes' => $clientes,
            'paginas' => $paginas,
            'pAtual' => $pAtual

        ]);
    }
    
    public function addCliente(){
        $this->render('cadastro');
    }

    public function addClienteAction(){ 
        
        $connection = Database::getInstance();
        
        $user = new ClienteDAO($connection);   
        
        $nome = filter_input(INPUT_POST,'nome');
        $conta = rand(100,999); 
        $banca = filter_input(INPUT_POST, 'banca');      
        

        if($nome && $banca){
            
           if($user->clienteExiste($nome)=== false){

            $u = new Conta();            
            $u->setNome($nome); 
            $u->setConta($conta);
            $u->setBanca($banca);

            $user->inserir($u);

                $this->redirect('/');

            }else{
                $this->redirect('/cliente/cadastro');
            }

        };  
        
    }

    public function addCash($args){

        $connection = DataBase::getInstance();
        
        $conta = new ClienteDAO($connection);

        $dados = $conta->listarCliente($args['id']);
        
        $this->render('deposito',[
            'dados' => $dados]
        );
    }
    public function addCashAction(){
        $id_conta = filter_input(INPUT_POST, 'id_conta');
        $tipo = filter_input(INPUT_POST, 'tipo');
        $valor = str_replace(",", ".", filter_input(INPUT_POST, 'valor'));
        $valor = floatval($valor);
        
        $connection = DataBase::getInstance();
        
        $historico = new HistoricoDAO($connection);
       
        if($id_conta && $valor){

            $historico->inserirHistorico($id_conta, $tipo, $valor);
            $this->redirect('/cliente');
        }
        $this->redirect("/cliente/deposito/$id_conta");
       

    }

    public function saque($args){
        $connection = DataBase::getInstance();
        
        $conta = new ClienteDAO($connection);

        $dados = $conta->listarCliente($args['id']);
        
        $this->render('saque',[
            'dados' => $dados]
        );
    }

    public function saqueAction(){

        $id_conta = filter_input(INPUT_POST, 'id_conta');
        $tipo = filter_input(INPUT_POST, 'tipo');
        $valor = str_replace(",", ".", filter_input(INPUT_POST, 'valor'));
        $valor = floatval($valor);
        
        $connection = DataBase::getInstance();
        
        $historico = new HistoricoDAO($connection);

       
        if($id_conta && $valor){

            $historico->diminuirHistorico($id_conta, $tipo, $valor);
            $this->redirect('/cliente');
        }
        $this->redirect("/cliente/saque/$id_conta");

    }

    public function historico($args){
        $connection = DataBase::getInstance();
        
        $historico = new historicoDAO($connection);
        $conta = new ClienteDAO($connection);

        $dados = $historico->listarHistorico($args['id']);
        $nome = $conta->listarCliente($args['id']);
        
        $this->render('historico',[
            'dados' => $dados,
            'nome'=> $nome]
        );
        
      
    }

    public function editarHistorico($arg){
        foreach ($arg as $tipo) {
            if($tipo==1){
                $nome="Manoel Monteiro Barreto";
                $this->render('EditSaque',[
                 'nome' => $nome]        
            );
            }else{      
                $nome="Manoel Monteiro Barreto";       
                $this->render('EditDeposito',[
                    'nome' => $nome]
                 );
            }
        }

    }

    public function cadastros(){
        $connection = Database::getInstance();
        
        $contas = new ClienteDAO($connection);  
        
        $limit=10;
        $total = $contas->getTotal();
        $paginas = ceil($total/$limit);
        $pAtual = 1;
        if(!empty($_GET['p'])){
            $pAtual = intval($_GET['p']);

        }
        $offset = ($pAtual * $limit) - $limit;

        $clientes = $contas->listAll($offset, $limit);

        $this->render('homeCliente',[

            'clientes' => $clientes,
            'paginas' => $paginas,
            'pAtual' => $pAtual

        ]);
       
    }

    public function editCadastro($id){
        $connection = Database::getInstance();
        $cadastro = new ClienteDAO($connection);

        $dados = $cadastro->listarCliente($id['id']);

        $this->render('editarCadastro',[
            'dados'=>$dados
        ]);
    }

}