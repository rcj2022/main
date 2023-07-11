<?php

namespace src\DAO;

use \src\models\Historico;
use \src\models\Conta;

class HistoricoDAO{

    private $pdo;

    public function __construct($connection){
        $this->pdo = $connection;
    }

    public function inserirHistorico($id_conta, $tipo, $valor){        

        $sql = $this->pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
        $sql->bindValue(":id_conta", $id_conta);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":valor", $valor);
        $sql->execute(); 

        $sql = $this->pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $id_conta);
		$sql->execute();

    
    }
    public function diminuirHistorico($id_conta, $tipo, $valor){        

        $sql = $this->pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
        $sql->bindValue(":id_conta", $id_conta);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":valor", $valor);
        $sql->execute(); 

        $sql = $this->pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $id_conta);
		$sql->execute();

    
    }
    public function listarHistorico($id_conta){        

        $array = [];

        $sql = $this->pdo->prepare("SELECT * FROM historico WHERE id_conta = :id");
        $sql->bindValue(":id", $id_conta);
        $sql->execute();

        if ($sql->rowCount() > 0) {
                      
            $data = $sql->fetchAll();              

            foreach ($data as $item) {
                $cliente = new Historico();
                $cliente->setId($item['id']); 
                $cliente->setIdConta($item['id_conta']);             
                $cliente->setTipo($item['tipo']); 
                $cliente->setValor($item['valor']); 
                $cliente->setData($item['data_operacao']);                     

                $array[] = $cliente;
               
            } 

        }

        return $array;        

    
    }

}