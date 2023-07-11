<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuarioController extends controller{

    public function add(){
        $this->render('novo');
    }
    public function addAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $idade = filter_input(INPUT_POST, 'idade');

        if($nome && $email){
            $data=Usuario::select()->where('email', $email)->execute();
            if(count($data)===0){
                Usuario::insert([
                    'nome'=>$nome,
                    'email'=>$email,
                    'idade'=>$idade
                ])->execute();

                $this->redirect('/');
            }
        }
        $this->redirect('/novo');
    }

    public function editar($arg){
        $user=Usuario::select()->find($arg['id']);
        $this->render('/usuario', ['arg'=>$user]);
    }

    public function editarAction($arg){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $idade = filter_input(INPUT_POST, 'idade');

        if($nome && $email){
            Usuario::update()
                ->set('nome', $nome)
                ->set('email', $email)
                ->set('idade', $idade)
                ->where('id', $arg['id'])
                ->execute();

                $this->redirect('/');
        }

        $this->redirect('/usuario/'.$arg['id'].'editar');

    }
    public function excluir($arg){
        Usuario::delete()->where('id', $arg['id'])->execute();
        $this->redirect('/');

    }

}