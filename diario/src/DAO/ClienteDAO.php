<?php
namespace src\DAO;

use src\models\Conta;

class ClienteDAO{

    private $pdo;

    public function __construct($connection){
        $this->pdo=$connection;

    }

    public function listAll($offset, $limit) : array {

        $array = [];

        $sql = $this->pdo->query("SELECT * FROM contas LIMIT $offset , $limit");
        

        if ($sql->rowCount() > 0) {
                      
            $data = $sql->fetchAll();
            foreach ($data as $item) {
                $cliente = new Conta();
                $cliente->setId($item['id']);
                $cliente->setNome($item['nome']); 
                $cliente->setBanca($item['banca']);
                $cliente->setConta($item['conta']);
                $cliente->setSaldo($item['saldo']);           

                $array[] = $cliente;
               
            }
        }

        return $array;
    }
    public function getTotal() {
		$sql = "SELECT COUNT(*) as c FROM contas";
		$sql = $this->pdo->query($sql);
		$sql = $sql->fetch();

		return $sql['c'];
	}

    public function clienteExiste($nome){        

        $sql = $this->pdo->prepare("SELECT * FROM contas WHERE nome = :nome");
        $sql->bindValue(":nome", $nome);
        $sql->execute();

        if ($sql->rowCount() > 0) {
                      
            $data = $sql->fetchAll();
            foreach ($data as $item) {
                $cliente = new Conta();
                $cliente->setId($item['id']);
                $cliente->setNome($item['nome']); 
                $cliente->setBanca($item['banca']);
                $cliente->setSaldo($item['saldo']);           

               return $cliente;
               
            }
        }

        return false;
    }


    public function listarCliente($id){

        $array = [];

        $sql = $this->pdo->prepare("SELECT * FROM contas WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
                      
            $data = $sql->fetchAll();              

            foreach ($data as $item) {
                $cliente = new Conta();
                $cliente->setId($item['id']);
                $cliente->setNome($item['nome']); 
                $cliente->setConta($item['conta']);
                $cliente->setBanca($item['banca']);
                $cliente->setSaldo($item['saldo']);           

                $array[] = $cliente;
               
            } 

        }

        return $array;

    }


    public function inserir(Conta $u){
       
        $sql = $this->pdo->prepare("INSERT INTO contas (nome, banca, conta) VALUES(:nome, :banca, :conta)");
        $sql->bindValue(":nome", $u->getNome());
        $sql->bindValue(":banca", $u->getBanca());
        $sql->bindValue(":conta", $u->getConta());
        $sql->execute();

    }



}