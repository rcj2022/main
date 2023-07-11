<?php
namespace src\DAO;

use src\models\Aluno;

class AlunoDAO{

    private $pdo;

    public function __construct($connection){
        $this->pdo=$connection;

    }

    public function listAll() : array {

        $array = [];

        $sql = $this->pdo->query("SELECT * FROM aluno");
        

        if ($sql->rowCount() > 0) {
                      
            $data = $sql->fetchAll();
            foreach ($data as $item) {
                $aluno = new Aluno();
                $aluno->setId($item['id']);
                $aluno->setNome($item['nome']); 
                $aluno->setSexo($item['sexo']);
                $aluno->setDatanascimento($item['dataNascimento']);
                $aluno->setIdade($item['idade']); 
              
                $array[] = $aluno;
               
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


    public function inserir(aluno $a){
       
        $sql = $this->pdo->prepare("INSERT INTO aluno (nome, sexo, dataNascimento, idade)
        VALUES(:nome, :sexo, :dataNascimento, :idade)");
        $sql->bindValue(":nome", $a->getNome());
        $sql->bindValue(":sexo", $a->getSexo());
        $sql->bindValue(":dataNascimento", $a->getDataNascimento());
        $sql->bindValue(":idade", $a->getIdade());        
        $sql->execute();

    }

    public function deleteAluno($id){
        $id = intval($id);
       
        $sql = $this->pdo->query("DELETE FROM aluno WHERE id = $id");

    }



}