<?php
use core\Router;

$router = new Router();



$router->get('/signup', 'LoginController@signup');
$router->post('/signup', 'LoginController@signupAction');

$router->get('/signin', 'LoginController@signin');
$router->post('/signin', 'LoginController@signinAction');
$router->get('/sair', 'LoginController@logout');

$router->get('/', 'HomeController@index');
//$router->get('/sobre/{nome}', 'HomeController@sobreP');
//$router->get('/sobre', 'HomeController@sobre');

$router->get('/aluno', 'AlunoController@index');
$router->post('/aluno', 'AlunoController@addAluno');
$router->get('/aluno/delete/{id}', 'AlunoController@dellAluno');

$router->get('/aluno/matricula', 'AlunoController@matricula');


$router->get('/calendario', 'HomeController@calendario');

$router->get('/turma', 'TurmaController@index');
$router->post('/turma', 'TurmaController@addTurma');

$router->get('/turma/delete/{id}', 'TurmaController@dellTurma');

$router->get('/frequencia', 'TurmaController@frequencia');
$router->get('/conteudo', 'TurmaController@conteudo');
$router->get('/nota', 'TurmaController@nota');

$router->get('/atividade', 'TurmaController@atividade');
$router->get('/material', 'TurmaController@material');



