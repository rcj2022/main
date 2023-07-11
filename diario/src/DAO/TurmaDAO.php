<?php
namespace src\DAO;

use src\models\Turma;

class TurmaDAO{

    private $pdo;

    public function __construct($connection){
        $this->pdo=$connection;

    }

    public function listAll() : array {

        $array = [];

        $sql = $this->pdo->query("SELECT * FROM turma");
        

        if ($sql->rowCount() > 0) {
                      
            $data = $sql->fetchAll();
            foreach ($data as $item) {
                $turma = new Turma();
                $turma->setId($item['id']);
                $turma->setEscola($item['escola']); 
                $turma->setNomeDaTurma($item['nomeDaTurma']);
                $turma->setTurno($item['turno']);
                $turma->setAnoLetivo($item['anoLetivo']); 
              
                $array[] = $turma;
               
            }
        }

        return $array;
    }
    public function getTotal() {
		$sql = "SELECT COUNT(*) as c FROM turma";
		$sql = $this->pdo->query($sql);
		$sql = $sql->fetch();

		return $sql['c'];
	}

    public function clienteExiste($nome){        

        $sql = $this->pdo->prepare("SELECT * FROM turma WHERE nome = :nome");
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


    public function inserir(turma $t){
       
        $sql = $this->pdo->prepare("INSERT INTO turma (escola, nomeDaTurma, turno, anoLetivo)
        VALUES(:escola, :nomeDaTurma, :turno, :anoLetivo)");
        $sql->bindValue(":escola", $t->getEscola());
        $sql->bindValue(":nomeDaTurma", $t->getNomeDaTurma());
        $sql->bindValue(":turno", $t->getTurno());
        $sql->bindValue(":anoLetivo", $t->getAnoLetivo());        
        $sql->execute();

    }

    public function deleteTurma($id){
        $id = intval($id);
       
        $sql = $this->pdo->query("DELETE FROM turma WHERE id = $id");

    }



}